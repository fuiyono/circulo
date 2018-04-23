<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    //
    public function index()
    {
    
      return view('authors');

    }

    public function insert(Request $request)
    {
      $name = $request->input('name');
      $lastname = $request->input('lastname');
      $biography = $request->input('biography');
      $image = $request->input('image');
      $email = $request->input('email');
      $telephone = $request->input('telephone');
      $website = $request->input('website');

      \DB::table('authors')->insert([
        ['name'=>$name,
         'lastname'=>$lastname,
         'biography'=>$biography,
         'image'=>$image,
         'email'=>$email,
         'telephone'=>$telephone,
         'website'=>$website
       ]
      ]);

      echo 'Autor guradado con éxito';
    }
}
