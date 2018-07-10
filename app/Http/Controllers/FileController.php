<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Listing;
use App\Property;
use DB;
use Illuminate\Http\Request;
class FileController extends Controller
{
    /*public function createlisting(Request $request){
        $this->validate($request,[
            
            'listing_type'=>'required',
            'price'=>'required',
            'location'=>'required',
            'description'=>'required',
            
        ]);
      $listing=new Listing();
    
      $listing->listing_type=$request->listing_type;
      $listing->price=$request->price;
      $listing->location=$request->location;
      $listing->description=$request->description;
       $listing->submit();
      
      
       return view('admin.home');
    
 } 
*/

   public function addlisting(Request $request)

{

        $this->validate($request,[
            'name' => 'required',
            'contact' => 'required',
            'proptype'=>'required',
            'proplocation'=>'required',
            'propdescription'=>'required',
            

        ]);



        Property::create($request->all());

        $property = new Property;



              if ($request->hasFile('image')) {
    $request->file('image')->store('public/images');
    
    // ensure every image has a different name
    $file_name = $request->file('image')->hashName();
    
    // save new image $file_name to database
    $listing->update(['image' => $file_name]);            
    }
    return view('submit');
   
   
}

    

 public function contact(){

      return view('contact');
    }
    public function submit(){

      return view('submit');
    }
    public function index()
    {

     $listings = Listing::all();

     return view('submit', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }
    /*public function show()
    {

      $listings= DB::table('listings')
           ->where('location',"ngong")
           ->get();
     
     

     return view('dashboard', compact('listings')); 
   
    }*/
public function add()
    {

     $listings = Listing::all();

     return view('welcome', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }
    public function find()
    {
          $listings= DB::table('listings')
          ->get();
     
     

     return view('propertylist', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }

    public function kitengelaplots()
    {
          $listings= DB::table('listings')
           ->where('location',"kiserian")
           ->get();
     
     

     return view('kitengelaplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }


    public function ngongplots()
    {
          $listings= DB::table('listings')
           ->where('location',"ngong")
           ->get();
     
     

     return view('ngongplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }


    public function kamakisplots()
    {
          $listings= DB::table('listings')
           ->where('location',"kamakis")
           ->get();
     
     

     return view('kamakisplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }

    public function athiriverplots()
    {
          $listings= DB::table('listings')
           ->where('location',"athiriver")
           ->get();
     
     

     return view('athiriverplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }

    public function naivashaplots()
    {
          $listings= DB::table('listings')
           ->where('location',"naivasha")
           ->get();
     
     

     return view('naivashaplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }

    public function commercialplots()
    {
          $listings= DB::table('listings')
           ->where('location',"commercial")
           ->get();
     
     

     return view('commercialplots', compact('listings')); 
     /*$listings=Listing::get();
    return view('admin.home',compact('listings'));*/
   
    }

public function propertylist(){

  return view ('propertylist');
}
public function about(){

  return view ('about');
}
/*public function destroy($id)
    {
        $listings = Listing::find($id);
        $listings->delete();

        return redirect('/dashboard')->with('success', 'listing has been deleted!!');
    }
*/
    public function display(Request $request)
    {

        $this->validate($request,[
            'sendername' => 'required',
            'email' => 'required',
            'subject'=>'required',
            'message'=>'required',
           
            

        ]);



       Contact::create($request->all());

        $contacts = new Contact;



              /*if ($request->hasFile('image')) {
    $request->file('image')->store('public/images');
    
    // ensure every image has a different name
    $file_name = $request->file('image')->hashName();
    
    // save new image $file_name to database
    $listing->update(['image' => $file_name]);            
    }*/
    return view('contact');
   
}
    


}
