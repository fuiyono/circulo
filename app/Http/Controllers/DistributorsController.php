<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorsController extends Controller
{
    //
    public function index()
    {
      return view('distributors');
    }

    public function insert(Request $request)
    {
      $name = $request->input('name');

      \DB::insert('insert into distributors (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/distrubutors">Click Here</a> to go back.';
   }
}
