<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //الداتا المسموح في التعديل وعليها و اضافاتها في الداتا بيز
 protected $fillable=['title','body'];

 //العلاقة بين المودلز
 function user(){
    return $this->belongsTo(User::class);

 }
}
