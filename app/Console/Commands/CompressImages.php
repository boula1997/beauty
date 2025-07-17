<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class CompressImages extends Command
{
    protected $signature = 'images:compress';
    protected $description = 'Compress and resize all images in public/images (including subfolders) without changing filenames';

    public function handle()
    {
        $path = public_path('images');

        if (!File::isDirectory($path)) {
            $this->error("Directory not found: $path");
            return;
        }

        $files = File::allFiles($path);
        $count = 0;

        foreach ($files as $file) {
            $ext = strtolower($file->getExtension());

            if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                try {
                    $image = Image::make($file->getRealPath());

                    // Resize ثم ضغط بنسبة 25%
                    $image->resize(2400, 1600, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->save($file->getRealPath(), 25);

                    $count++;
                    $this->info("✅ Compressed: " . $file->getRelativePathname());
                } catch (\Exception $e) {
                    $this->error("❌ Failed: " . $file->getRelativePathname() . " - " . $e->getMessage());
                }
            }
        }

        $this->info("🎉 Done! Total images compressed: $count");
    }
}