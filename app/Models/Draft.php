<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    // public function user(){
    //     return $this->belongsTo(user::class,'id');
    // }
    public function ebookfile(){
        return $this->belongsTo(File::class,'id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id');
        // return $this->belongsTo(User::class, foreignKey:'',ownerKey:'');

    }
}