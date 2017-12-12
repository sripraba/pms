<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'passwords';

    public function getList(){
    	return $passwords = \App\Password::all();
    	
    }
}
