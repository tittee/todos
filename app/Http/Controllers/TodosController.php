<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
		public function index(){
			$todos = Todos::all();
			return view('todos')->with('todos', $todos);
		}
}
