<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function file(){

        return view('pages.file');
    }
    public function blog(){

        $posts = Post::orderBy('id', 'desc')->simplePaginate(20);
        return view('pages.blog')->with('posts', $posts );
    }
    public function Elearning(){

        // $posts = Post::orderBy('id', 'desc')->simplePaginate(20);
        return view('pages.e-learning');
    }
    public function videoUpload(){

        // $posts = Post::orderBy('id', 'desc')->simplePaginate(20);
        return view('pages.videoUpload');
    
    }

  


    public function viewdesc($id){

        $getfile = File::findorfail($id);
        $orderfiles = File::where('course', 'Like', '%'.$getfile->course.'%')->take(4)->orderby('created_at')->get();
        // dd(   $getfile );
        return view('pages.viewdesc')->with([
             'files' => $getfile,
            'orderfiles'=>  $orderfiles

    ]);
    }

    public function login(){
        return view('account.login');
    }
    public function register(){
        return view('account.register');
    }
}