<?php namespace todoapp;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model {

	private $rules = [
		'name' => 'required', 
		'description' => 'required',
		'email' => 'required|email|unique:users'
	];

	public function validate()
	{
		$v = \Validator::make($this->attributes, $this->rules); if ($v->passes()) return true;
		$this->errors = $v->messages();
		return false;
	} 

}
