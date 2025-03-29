<?php

namespace App\Traits;

use App\Models\File as ModelsFile;

use Exception;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\File;

trait  MorphFile
{
    public function file(): MorphOne
    {
        return $this->morphOne(ModelsFile::class, 'fileable');
    }

    public function uploadFile($dbSave=true)
    {
        if (request()->hasFile('image')) {
            try{
                $file = request()->file('image');
                $image = request()->image->store('images');
                $file->move('images',  $image);
                if($dbSave)
                $this->file()->create(['url' =>  $image]);
            }catch(Exception $e){
                dd($e->getMessage());
                return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }

        }
    }

    public function updateFile($dbSave=true)
    {
        if (request()->hasFile('image')) {
            try{
                $this->deleteFile();
                $file = request()->file('image');
                $image = $file ->store('images');
                $file->move('images', $image);
                if($dbSave)
                $this->file()->create(['url' => $image]);
            }catch(Exception $e){
                dd($e->getMessage());
                return redirect()->back()->with(['error' => __('general.something_wrong')]);
            }

        }
    }

    public function deleteFile()
    {
        try{
                if (isset($this->file)){
                $this->file()->delete();}
                if(file_exists($this->file)){
                    File::delete($this->image);
                }
            }catch(Exception $e){
                dd($e->getMessage());
                return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
