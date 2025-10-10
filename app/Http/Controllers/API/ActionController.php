<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\MessageRequest;
use App\Models\Message;
use App\Models\Project;
use App\Models\Issue;
use App\Models\Deadline;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ActionController extends Controller
{



public function show($table, $itemId)
{
    $dbName = env('DB_DATABASE', 'webapp');

    // Get main table columns
    $columns = DB::select("
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
    ", [$dbName, $table]);

    // Prepare column array
    $columns = collect($columns)->map(function ($col) {
        return (array) $col;
    })->toArray();

    // ✅ Add fake 'image' and 'images' columns manually
    $columns[] = [
        "COLUMN_NAME" => "image",
        "DATA_TYPE" => "image",
    ];
    $columns[] = [
        "COLUMN_NAME" => "images",
        "DATA_TYPE" => "multimages",
    ];

    // Get main table data
    $data = DB::select("SELECT * FROM {$table} WHERE id = ?", [$itemId]);
    $data = collect($data)->map(function ($item) {
        $row = (array) $item;
        $row["image"] = "https://via.placeholder.com/150";
        $row["images"] = ["https://via.placeholder.com/150", "https://via.placeholder.com/140"];
        return $row;
    })->first(); // Only one record expected

    // 🔍 Check if a _translations table exists
    $translationTable = Str::singular($table) . '_translations';
    $translationExists = DB::table('information_schema.tables')
        ->where('table_schema', $dbName)
        ->where('table_name', $translationTable)
        ->exists();

    if ($translationExists) {
        // Get translation columns
        $translationColumns = DB::select("
            SELECT COLUMN_NAME, DATA_TYPE
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
        ", [$dbName, $translationTable]);

        // Add translation columns (if not duplicate)
        foreach ($translationColumns as $col) {
            if (!in_array($col->COLUMN_NAME, array_column($columns, 'COLUMN_NAME'))) {
                $columns[] = [
                    "COLUMN_NAME" => $col->COLUMN_NAME,
                    "DATA_TYPE" => $col->DATA_TYPE,
                ];
            }
        }

        // Get translation data for the item
            $translationData = DB::table($translationTable)
                ->where(Str::singular($table) . '_id', $itemId)
                ->first();

        if ($translationData) {
            foreach ((array) $translationData as $key => $value) {
                $data[$key] = $value;
            }
        }
    }

    return response()->json([
        'success' => trans('general.sent_successfully'),
        'columns' => $columns,
        'data' => [$data], // wrapped in array to match original response structure
    ]);
}




public function deleteItem($table, $itemId)
{
    // Retrieve table columns and their data types
    $columns = DB::select("
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
    ", [env('DB_DATABASE', 'webapp'), $table]);

    // Convert columns to array (for easy manipulation)
    $columns = collect($columns)->map(function ($col) {
        return (array) $col;
    })->toArray();

    // ✅ Add an extra "image" column manually
    $columns[] = [
        "COLUMN_NAME" => "image",
        "DATA_TYPE" => "image",
    ];
    
    $columns[] = [
        "COLUMN_NAME" => "images",
        "DATA_TYPE" => "multimages",
    ];

    // Retrieve record data
    $data = DB::select("
        delete FROM {$table} WHERE id = ?
    ", [$itemId]);



    return response()->json([
        'success' => trans('general.sent_successfully'),
        'columns' => $columns,
        'data' => $data,
    ]);
}


public function table($table)
{
    // Retrieve table columns and their data types
    $columns = DB::select("
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
    ", [env('DB_DATABASE', 'webapp'), $table]);

    // Convert columns to array (for easy manipulation)
    $columns = collect($columns)->map(function ($col) {
        return (array) $col;
    })->toArray();

        // ✅ Add an extra "image" column manually
    $columns[] = [
        "COLUMN_NAME" => "image",
        "DATA_TYPE" => "image",
    ];



    // Retrieve record data
    $data = DB::select("SELECT * FROM {$table}");


        // Convert data to array and add the fake "image" field
    $data = collect($data)->map(function ($item) {
        $row = (array) $item;
        $row["image"] = settings()->logo; // ✅ Example image link
        return $row;
    })->toArray();


    return response()->json([
        'success' => trans('general.sent_successfully'),
        'columns' => $columns,
        'data' => $data,
    ]);
}


public function tableNames()
{
    $tables = DB::select("
        SELECT DISTINCT TABLE_NAME 
        FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE table_schema = '" . env('DB_DATABASE', 'webapp') . "' 
        AND TABLE_NAME NOT LIKE '%_translation%' 
        ORDER BY TABLE_NAME;
    ");

    return response()->json([
        'success' => trans('general.sent_successfully'),
        'tables' => $tables,
    ]);
}
}
