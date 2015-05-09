<?php namespace todoapp;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model {

	private $rules = [
		'name' => 'required', 
		'description' => 'required'
	];

}
