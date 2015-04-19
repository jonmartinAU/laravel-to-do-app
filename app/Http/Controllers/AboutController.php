<?php namespace todoapp\Http\Controllers;

use todoapp\Http\Requests;
use todoapp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {

	function index() { 
		return view('about.index');
	}
}
