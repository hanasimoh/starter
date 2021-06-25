<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use LaravelLocalization;

class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function GetOffer()
    {
     return Offer::select('id', 'name')->get();

    }

  /* public function store(){

        Offer::create([
            'name' => 'offer3',
            'price' => '5000',
            'details' => 'offer details',
        ]);

    }*/

    public function create(){
        return view('offers.create');
    }


    public function store(offerRequest $request)
    {
        //validation
        //$validator = Validator::make($request->all(),[
           // 'name'=>'required|max:100|unique:offers,name',
          //  'price' =>'required|numeric',
          //  'details' =>'required',

       // ]);
      //  if($validator ->fails()){
         //   return $validator->errors();
       // }

        //insert
        Offer::create([

            'name'=>$request ->name,
            'price' =>$request ->price,
            'details' =>$request ->details,
        ]);
        return 'saved successfuly';

    }
     public function getAlloffers(){

       $offers = Offer::select('id','price','name','details'
          // 'name_'.LaravelLocalization::getCurrentLocale().' as name',
           //'details_'.LaravelLocalization::getCurrentLocale().' as details'
       )-> get();
        return view('offers.all', compact('offers'));
     }


}
