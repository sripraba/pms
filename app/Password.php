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
    protected $properties = ['pagetitle' => 'Password'  , 'pagehometitle' => 'Password' , 'pagehomelink' => 'passwords.index', 'icon' => 'fa fa-lock', 'title' => 'Password'];

    public function getProperties(){
        return $this->properties;
    }
    public function getList(){
    	return $passwords = \App\Password::all();
    }
}
