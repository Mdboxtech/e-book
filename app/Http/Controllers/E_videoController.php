<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E_videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $posts = Post::orderBy('id', 'desc')->simplePaginate(20);
        return view('pages.videoUpload');
    
    }

  
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            dd($request);
            $formfield = $request->validate([
                'user_id' => 'required',
                'videoTitle' => 'required',
                'faculty' => 'required',
                'course' => 'required',
                'level' => 'required',
                'description' => 'required',
                'videopath' => 'required|mimes:mp4',
                'poster' => 'image|mimes:png,jpg,jpeg,|max:1000',
            ]);
    
            if ($request->hasFile('videopath')) {
                $formfield['videopath'] = $request->file('videopath')->store('video', 'public');
            }
    
            if ($request->hasFile('videoposter')) {
                $formfield['poster'] = $request->file('poster')->store('videoposters', 'public');
            }
            File::create($formfield);
            return back()->with('success', 'upload successful');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
