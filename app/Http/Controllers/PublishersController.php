<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishersController extends Controller
{
    //
    public function index()
    {
      return view('publishers');
    }

    public function insert(Request $request)
    {
      $name = $request->input('name');

      \DB::table('publishers')->insert([
    ['name' => $name]
        ]);

        echo "Record inserted successfully.<br/>";
    }
}
