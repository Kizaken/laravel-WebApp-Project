<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable =[
			'file_id', 'user_id', 'name', 'description', 'price', 'imgurl','file_id'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}


    public function file()
    {
        return $this->belongsTo('App\Fileentry');
    } 
}
