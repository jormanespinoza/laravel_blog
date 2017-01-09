<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   protected $table = "tags";
   protected $fillable = ['name'];
   
   // Relationship
   public function articles()
   {
   		return $this->belongsToMany('App\Article')->withTimestams();		
   }

   public function scopeSearch($query, $name) {
   		return $query->where('name', 'LIKE', '%'.$name.'%' );
   }
}
