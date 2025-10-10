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
use Illuminate\Support\Facades\Schema;
class ActionController extends Controller
{





public function show($table, $itemId)
{
    $dbName = env('DB_DATABASE', 'webapp');

    // Step 1: Get main table columns
    $columns = DB::select("
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
    ", [$dbName, $table]);

    $columns = collect($columns)->map(function ($col) {
        return (array) $col;
    })->toArray();

    // Step 2: Add fake image columns
    $columns[] = ["COLUMN_NAME" => "image", "DATA_TYPE" => "image"];
    $columns[] = ["COLUMN_NAME" => "images", "DATA_TYPE" => "multimages"];

    // Step 3: Fetch main table data
    $data = DB::table($table)->where('id', $itemId)->first();

    if (!$data) {
        return response()->json([
            'success' => false,
            'message' => 'Record not found',
        ], 404);
    }

    $data = (array) $data;
    $data["image"] = "https://via.placeholder.com/150";
    $data["images"] = [
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/140"
    ];

    // Step 4: Merge translation table if exists
    $translationTable = Str::singular($table) . '_translations';
    $translationExists = DB::table('information_schema.tables')
        ->where('table_schema', $dbName)
        ->where('table_name', $translationTable)
        ->exists();

    if ($translationExists) {
        $translationColumns = DB::select("
            SELECT COLUMN_NAME, DATA_TYPE
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?;
        ", [$dbName, $translationTable]);

        foreach ($translationColumns as $col) {
            if (!in_array($col->COLUMN_NAME, array_column($columns, 'COLUMN_NAME'))) {
                $columns[] = [
                    "COLUMN_NAME" => $col->COLUMN_NAME,
                    "DATA_TYPE" => $col->DATA_TYPE,
                ];
            }
        }

        $translationData = DB::table($translationTable)
            ->where(Str::singular($table) . '_id', $itemId)
            ->first();

        if ($translationData) {
            $data = array_merge($data, (array) $translationData);
        }
    }

    // Step 5: Fetch related table options for *_id fields
    $related = [];
    foreach ($columns as $col) {
        $columnName = $col['COLUMN_NAME'];

        if (Str::endsWith($columnName, '_id') && $columnName !== 'id') {
            // Example: admin_id => admins
            $relatedTable = Str::plural(Str::before($columnName, '_id'));

            $tableExists = DB::table('information_schema.tables')
                ->where('table_schema', $dbName)
                ->where('table_name', $relatedTable)
                ->exists();

            if ($tableExists) {
                // Select id and title or name or fallback to id only
                $selectable = Schema::hasColumn($relatedTable, 'title') ? 'title' :
                              (Schema::hasColumn($relatedTable, 'name') ? 'name' : (Schema::hasColumn($relatedTable, 'fullname') ? 'fullname' : null));

                if ($selectable) {
                    $related[$columnName] = DB::table($relatedTable)
                        ->select('id', $selectable)
                        ->get();
                } else {
                    // Just return IDs
                    $related[$columnName] = DB::table($relatedTable)
                        ->select('id')
                        ->get();
                }
            }
        }
    }

    // Final response
    return response()->json([
        'success' => trans('general.sent_successfully'),
        'columns' => $columns,
        'data' => [$data],
        'related' => $related, // 👈 includes admin_id, user_id, etc. options
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
