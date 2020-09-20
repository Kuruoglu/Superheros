<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $guarded = [];

    public function setImgAttribute($value)
    {
        $fName = $value->getClientOriginalName();

        $value->move(public_path('uploads' ), $fName);
        $this->attributes['img'] = '/uploads/'. $fName;
     
      
    }

    public function getImgAttribute($value)
    {
        return $value ? $value : asset('uploads/no-image.jpg');
    }

  

   

}
