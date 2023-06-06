<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Draft;
use Illuminate\Http\Request;

class webfunctionController extends Controller
{


    public function text(Request $request){

        // return $request->speakText;
        if(strpos($request->speakText,'profile') || $request->speakText == "profile"  ){
        return 'profile';
        }
        if(strpos($request->speakText,'files') || $request->speakText == "files"  ){
        return 'files';
        }
        if(strpos($request->speakText,'account') || $request->speakText == "account"|| $request->speakText == "login" ||$request->speakText == "sign" ){
        return 'account';
        }
    }

    public function saveDraft($id, Draft $draft)
    {
        // dd(auth()->user());
        if (auth()->user() == null) {
            return redirect('/login');
        } else {

            $file= File::find($id);
            $check=Draft::where('file_id',$file->id)->where('user_id',auth()->user()->id)->get();
if($check->count()>0){
    return back()->with('error', 'file already added!!!');

}else{


            $draft->user_id = auth()->user()->id;
            $draft->file_id = $id;
            $draft->filename = $file->filename;
            $draft->faculty = $file->faculty;
            $draft->course = $file->course;
            $draft->level = $file->level;
            $draft->poster = $file->poster;
            $draft->file = $file->file;
            $draft->description = $file->description;
            $draft->save();

            return back()->with('success', 'file saved successfull');
            // Draft::create();

        }
        }
    }

    public function viewDraft(File $file){

$files = auth()->user()->draft()->orderby('id', 'desc')->get();
// $files = auth()->user()->draft()->ebookfile()->orderby('id', 'desc')->get();
// $files = auth()->user()->with(relations:'draft', 'draft.ebookfile')->orderby('id', 'desc')->get();
// dd($files);
        return view('pages.draft')->with('files',$files);
    }



    public function usermanage(){


        $user=User::orderby('updated_at','desc')->paginate(30);
        return view('pages.usermanage')->with('users',$user);
    }
    public function removeDraft($id){

     Draft::find($id)->delete();
   return back()->with('success','remove successful');
    }
}