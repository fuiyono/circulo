<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
      $authors =  \DB::select('select id, name, lastname from authors');
      $publishers = \DB::select('select id, name from publishers');
      return view('books', ['authors'=> $authors, 'publishers'=> $publishers]);
    }

    public function insert(Request $request)
    {
      $authorId = $request->input('authorId');
      $publisherId = $request->input('publisherId');
      $title = $request->input('title');
      $isbn = $request->input('isbn');
      $barcode = $request->input('barcode');
      $edition = $request->input('edition');
      $description = $request->input('description');
      $image = $request->input('image');
      $printing = $request->input('printing');
      $year = $request->input('year');
      $collection = $request->input('collection');

      \DB::table('books')->insert([
        [
         'title'=>$title,
         'author_id'=>$authorId,
         'edition'=>$edition,
         'isbn'=>$isbn,
         'barcode'=>$barcode,
         'publisher_id'=>$publisherId,
         'description'=>$description,
         'image'=>$image,
         'printing'=>$printing,
         'year'=>$year,
         'collection'=>$collection
        ]
      ]);

        echo "Gurdado con éxito";
    }

}
