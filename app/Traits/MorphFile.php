<?php

namespace App\Traits;

use App\Models\File as ModelsFile;
use Exception;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait MorphFile
{
    public function file(): MorphOne
    {
        return $this->morphOne(ModelsFile::class, 'fileable');
    }

    public function uploadFile()
    {
        if (request()->hasFile('image')) {
            try {
                $file = request()->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('images/' . $filename);

                // Resize and save
                Image::make($file)
                    ->resize(1200, 800, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->save($path, 80);

                // Save in DB
                $this->file()->create(['url' => 'images/' . $filename]);

            } catch (Exception $e) {
                dd($e->getMessage());
                return redirect()->back()->with(['error' => __('general.something_wrong')]);
            }
        }
    }

    public function updateFile()
    {
        if (request()->hasFile('image')) {
            try {
                $this->deleteFile(); // delete old one
                $this->uploadFile(); // just reuse upload
            } catch (Exception $e) {
                dd($e->getMessage());
                return redirect()->back()->with(['error' => __('general.something_wrong')]);
            }
        }
    }

    public function deleteFile()
    {
        try {
            if ($this->file) {
                $path = public_path($this->file->url);
                if (file_exists($path)) {
                    File::delete($path);
                }
                $this->file()->delete();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
