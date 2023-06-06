<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pages.uploadpost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function postmanage(){

//    $posts = Post::orderBy('id')->paginate(10);
  $posts= auth()->user()->mypost()->simplePaginate(50);
   return view('pages.postmanage')->with('posts',$posts);

     }
    public function create(Request $request)
    {
        // dd($request->file('file'));
        $formfield =$request->validate([
        'user_id'=>'required',
        'title' => 'required',
         'body' => 'required',
         'file' => 'image|mimes:png,jpg,jpeg,gif,|max:20000000',

        ]);
        // dd($formfield );
        if($request->hasFile('file')){
            $formfield['file'] = $request->file('file')->store('postimg','public');
        }
        Post::create($formfield);
        return back()->with('success','upload successful');
    }
    public function getCategories(){

        $categories = Categorie::all();

        return response()->json( $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $post = Post::findorfail($id);
        // dd($post->theUser);

        return view('pages.showblog')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::findorfail($id);

      return view('pages.editpost')->with('post',$post);
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
        $post = Post::find($id);

        $formfield =$request->validate([
            'user_id'=>'required',
            'title' => 'required',
             'body' => 'required',
             'file' => 'image|mimes:png,jpg,jpeg,|max:20000000',

            ]);
            // dd($formfield );
            if($request->hasFile('file')){
                Storage::delete('public/'.$post->file);
                $formfield['file'] = $request->file('file')->store('postimg','public');
            }
            $post->update($formfield);
            return redirect('/postmanage')->with('success','updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    $post= Post::find($request->id);
     Storage::delete('public/'.$post->file);
     $post->delete();
     return back()->with('success','delete successful');
    }
}
