<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
			return view('static/index');
		}

    public function not_found() {
      return response() -> view('static/not_found', [], 404);
    }
}
