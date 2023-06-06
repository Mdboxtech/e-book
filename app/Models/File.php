<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;




public function user(){
    return $this->belongsTo(user::class,'id');
}

public function draftfile(){
    return $this->hasMany(Draft::class,'file_id');
}






    public function scopeFilter($query, array $filter){

        if($filter['level'] ?? false || $filter['course'] ?? false || $filter['searchfile'] ?? false ){

            if($filter['searchfile'] != null && $filter['course'] != null && $filter['level'] != null){
                // dd('all');

                $query->where('filename', 'LIKE', $filter['searchfile'].'%' )->where('course',  'LIKE', $filter['course'].'%')->where('level',  'LIKE', $filter['level'].'%');
            }
             if($filter['searchfile'] != null && $filter['course'] != null ){
                // dd('s and c');

    $query->where('filename', 'LIKE', $filter['searchfile'].'%' )->where('course',  'LIKE', $filter['course'].'%');
            }else

            // if($filter['level']  != null && $filter['course'] == null){

            //     dd('l');
            //     $query->where('level','LIKE', $filter['level'].'%');
            // }

            if($filter['level']  != null && $filter['searchfile'] != null ){

                // dd('ls');
                $query->where('filename', 'LIKE', $filter['searchfile'].'%')->where('level','LIKE', $filter['level'].'%');
            }else
            if($filter['level']  != null && $filter['course'] != null ){

                // dd('cl');
                $query->where('course', 'LIKE', $filter['course'].'%')->where('level','LIKE', $filter['level'].'%');
            }else

            if($filter['level']  != null){
                // dd('l');
                $query->where('level','LIKE', $filter['level'].'%');
            }

}else{
    // dd('not working');
    if( $filter['searchfile'] != null){
        // dd('s');

        $query->where('filename', 'LIKE', $filter['searchfile'].'%');
    }

}







    }
}