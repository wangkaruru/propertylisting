<?php

namespace App\Http\Controllers\Token;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Token;
use Carbon\Carbon;
use Ixudra\Curl\Facades\Curl;
class TokenController extends Controller
{
        /**
    --------get access token
    */

   public  $api_url="";
    public function __construct(){
    	$this->api_url='http://172.18.18.196:8080/m_esb';
    }
    public function get_token(){
    	$access=Token::first();
      try{
      if($access==""){
      	$response = Curl::to($this->api_url.'/oauth/token')
             ->withHeaders([ 
             	'Content-Type:application/x-www-form-urlencoded',
             	'Authorization:Basic YXBpOnNlY3JldA==',
             	 ] )
            ->withData( [
        	'grant_type' =>'password',
        	'username' => 'admin',
        	'password' => 'G5t^h1!L8B',
        	 ] )
        ->post();
         $token_data=json_decode((string) $response, true);
    	$token=Token::create([
         'access_token'=>$token_data['access_token'],
         'expiry'=>$token_data['expires_in'],
    	]);
    	$access_token=$token->access_token;
    	return $access_token;
      }
      else{
        $data=Token::find($access->id);
         $today=Carbon::now();
     	// dd($today);
       $updated_at=date_create($data->updated_at);
       //dd($updated_at);
       $diff=$today->diffInSeconds($updated_at);
       //dd($diff);
       if($data->expiry > $diff){
       	$access_token=$data->access_token;
       return $access_token;
   }
       else{

$response = Curl::to($this->api_url.'/oauth/token')
             ->withHeaders([ 
             	'Content-Type:application/x-www-form-urlencoded',
             	'Authorization:Basic YXBpOnNlY3JldA==',
             	 ] )
            ->withData( [
        	'grant_type' =>'password',
        	'username' => 'admin',
        	'password' => 'G5t^h1!L8B',
        	 ] )
        ->post();
         $token_data=json_decode((string) $response, true);
    	$token=Token::where('id',$data->id)->update([
         'access_token'=>$token_data['access_token'],
         'expiry'=>$token_data['expires_in'],
    	]);
    	$access_token=$token->access_token;
    	return $access_token;

      }  
    }
  }
    catch(\Exception $e){
     return redirect()->back()->with('warning','Unable to authorize request, please try again!');
    }
}
}
