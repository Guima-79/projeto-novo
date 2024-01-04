<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
   
    public function index()

    {

        $business = Business::where('name', 'LIKE', '%jon%')->get();
        dd($business->toArray());
       
    //     DELETE
    //     $business = Business::find(1);
    //     $business->delete();
    //     dd($business);
        

        // PESQUISA
        // $business = Business::find(2);
        // dd($business->toArray());


         //   UPDATE
        // $business = Business::find(1)->update([

        //     'name'=> 'Pedro',
        //     'email'=> 'asasa@.com',

        // ]);


        // $business = Business::find(1);
        // $business->name = 'Guima';
        // $business->email = 'Guima10@gmail.com';
        // $business->address = 'Rua da forca, 54';
        // $business->save();

        //     $input =[
        //         'name'=> 'Pedro Gama',
        //         'email'=> 'Lander@.com',

        //     ];
        // $business = Business::find(1);
        // $business->fill($input);
        // $business->save();
  
         //   CREATE
        // $business = Business::create([
        //     'name' => 'Jon Snow',
        //     'email'=> 'jon@snow.com',
        //     'address' => 'Rua a quadra b',

        // ]);
        // dd($business);




    // $businesses =  Business::all();
    
    
    // $business = Business::find(1);

    // $businessWhere = Business::where('name', 'Abernathy-Kassulke')->get();

    // $businessWhereFirst = Business::where('name', 'Abernathy-Kassulke')->first();
    // dd($businessWhere, $business, $businesses);
    }
}
