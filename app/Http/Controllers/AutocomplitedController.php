<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutocomplitedController extends Controller
{
      public function index(){
            $data = config('admin.admin');

          return view('weathers.index');
  }
}
