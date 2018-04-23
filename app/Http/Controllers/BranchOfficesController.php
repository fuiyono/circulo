<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchOfficesController extends Controller
{
    //
    public function index()
    {
      $distributors = \DB::select('select * from distributors');
      return view('branch',['distributors'=>$distributors]);

    }

    public function insert(Request $request)
    {
      $name = $request->input('name');
      $distributorId = $request->input('distributorId');
      $street = $request->input('street');
      $colony = $request->input('colony');
      $city = $request->input('city');
      $state = $request->input('state');
      $cp = $request->input('cp');
      $location = $request->input('location');
        \DB::table('branch_offices')->insert([
        ['name'=>$name,
         'distributor_id'=>$distributorId,
         'street'=>$street,
         'colony'=>$colony,
         'city'=>$city,
         'state'=>$state,
         'cp'=>$cp

       ]
      ]);
        echo "Record inserted successfully.<br/>";
    }

}
