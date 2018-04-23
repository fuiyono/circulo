<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CatalogoController extends Controller
{
    //
    public function index()
    {


      $authors = \DB::table('authors')
          ->join('books', 'authors.id', '=', 'books.author_id')
          ->select('books.id', 'books.title', 'authors.name',
           'authors.lastname', 'books.isbn', 'books.printing')
          ->get();

        return view('catalogo', ['authors'=> $authors]);
    }



}
