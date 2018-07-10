<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\User;
use App\Listing;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\Token\TokenController;
class DashboardController extends Controller
{


    public function store(Request $request){
        //validation
       if($request->has('image')){
          $path = $request->file('image')->store('public/images');
          $path =str_replace("public/images","",$path);
          Listing::create([
            'price'=>$request->price,
            'description'=>$request->description,
            'location'=>$request->location,
            'image'=>$path
          ]);
       }
       return back()->withMessage('success');
 
     }

    public function index(){

           /*$listings= DB::table('listings')
           ->where('location',"ngong")
           ->get();*/

     return view('admin.dashboard'); 
 }
 
}
