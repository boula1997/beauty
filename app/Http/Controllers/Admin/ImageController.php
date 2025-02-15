<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Gallery;


class ImageController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    function __construct()
    {
         $this->middleware('permission:image-list|image-create|image-edit|image-delete', ['only' => ['index','show']]);
         $this->middleware('permission:image-create', ['only' => ['create','store']]);
         $this->middleware('permission:image-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:image-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
          // dd(10);
        $tests = Image::latest()->get();
        return view('admin.crud.gallery-images.index', compact('tests'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.gallery-images.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // dd($request->all());
        $request->validate([
      
         'image' => 'required',
        
      ],[
      'image.required'=>'حقل الصورة مطلوب',
     
    ]);
 
 
    $file = $request->file('image');
    $name=$file->getClientOriginalName();
    $file->move('images',$name);
    $data=$request->all();
    $data['image']='images/'.$name;
        Image::create($data);
        return redirect()->route('tests.index')
            ->with('success', trans('general.created_successfully'));
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('admin.crud.gallery-images.show', compact('image'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
    //    dd($image->title);
        return view('admin.crud.gallery-images.edit', compact('image'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
         
         $data=$request->all();
 
         if($request->hasFile('image')!==null){

            if(file_exists($image->path))
            File::delete($image->path);
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $data['image']='images/'.$name;

         }
 
         else
        { $data['image']=$image->path;}
 
         $image->update($data);
 
 
        return redirect()->route('tests.index')
            ->with('success', trans('general.update_successfully'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        dd($image->path);
        $image->delete();
 
        return redirect()->route('tests.index')
            ->with('success', trans('general.deleted_successfully'));
    }
}
