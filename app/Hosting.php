<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'hostings';

    public function getList(){
    	return $passwords = \App\Hosting::all();
    	
    }
}
