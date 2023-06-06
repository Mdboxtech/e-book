<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.fileUpload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->file('file')->getSize());
        $formfield = $request->validate([
            'user_id' => 'required',
            'filename' => 'required',
            'faculty' => 'required',
            'course' => 'required',
            'level' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,docx,ppt',
            'poster' => 'image|mimes:png,jpg,jpeg,|max:1000',
        ]);

        if ($request->hasFile('file')) {
            $formfield['file'] = $request->file('file')->store('files', 'public');
        }

        if ($request->hasFile('poster')) {
            $formfield['poster'] = $request->file('poster')->store('posters', 'public');
        }
        File::create($formfield);
        return back()->with('success', 'upload successful');
    }
    public function getCategories(Request $request)
    {

            $categories = Faculty::select($request->faculty)->get();

        return response()->json($categories);
        // $categories = Faculty::all();
// dd('ok');
    }

    public function getfile(Request $request){

        $Faculty = $request->faculty;
       $file = File::orderby('id',"desc")->get();

       return view('pages.file2')->with(['files'=>$file,
    'faculty' =>$Faculty
    ]);

    }
    public function getdbfile(Request $request){
        $addmore =20;
        // dd($request->addmore);
        $files = File::orderby('id',"desc")->skip($request->addmore)->take($addmore)->get();
           if(  $files->count()<=0){
          return 'null';
            }else{

                return response()->json($files);
            }
    }
    public function getdbfile2(Request $request){
        $addmore =20;
        // dd($request->addmore);
        $files = File::where('course', $request->course)->where('faculty',$request->faculty)->skip($request->addmore)->take($addmore)->get();
           if(  $files->count()<=0){
          return 'null';
            }else{

                return response()->json($files);
            }
    }
    public function dbfile(Request $request){
        $addmore =20;
        $files = File::where('course', $request->course)->skip($request->addmore)->take($addmore)->get();
           if(  $files->count()<=0){
          return 'null';
            }else{

                return response()->json($files);
            }
    }
    public function filtersearch(){
        // dd(request());
        // $message = 'null';
        $files = File::orderby('id',"desc")->filter(request(['searchfile', 'course','level']))->get();
        // if(  $files->count()<=0){

            if(  $files->count()<=0){
          return 'null';
            }else{

                return response()->json($files);
            }

        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function manage(){



$files =auth()->user()->myfiles()->orderby('updated_at','desc')->simplePaginate(50);
        // $files =User::find($id)->myfiles();


            return view('pages.managefile')->with('files',$files);


     }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file =File::find($id);
        return view('pages.fileEdit')->with('file',$file);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $file =File::find($id);
        // dd($file);
        $formfield = $request->validate([
            'filename' => 'max:100',
            'faculty' => 'max:100',
            'course' => 'max:100',
            'level' => 'max:100',
            'description' => 'min:3',
            'poster' => 'image|mimes:png,jpg,jpeg,|max:1000',
        ]);
if($file->user_id != auth()->user()->id ){

    return back()->with('error','authorize field!!!');

}else{



if($request->hasFile('poster')){
    if($file->poster != 'posters/default.png'){

      Storage::delete(['public/'.$file->poster]);
    }
    $formfield['poster'] = $request->file('poster')->store('posters','public');
}

   if($file->update($formfield )) {

       return redirect('/manage')->with('success','update successful');
   }else{
       return back()->with('error','update failed');
   }

}

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $file = File::find($request->id);
        if($file->poster != 'posters/default.png'){
      Storage::delete(['public/'.$file->poster]);
    }
    Storage::delete(['public/'.$file->file]);
        $file->delete();
        return back()->with('success','delete successful');


    }
//     public function SelectedDelete(Request $request)
//     {
//         $file_id = $request->  file_id;
//        $file=  File::whereIn('id',  $file_id);
// foreach($file as $files){
//      dd( $files->poster);
// }
//     //    dd($file);
//         //  Storage::deleteALL(['public/'.$file->poster]);
//     }

}