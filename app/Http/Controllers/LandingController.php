<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LandingController extends Controller {

   //
   public function lead(Request $request) {
      $this->validate($request, [
          'name' => 'required|max:30',
          'email' => 'required|email'
      ]);

      $email = $request->email;
      $lead = Lead::where('email', '=', $email)->first();

      if ($lead == null) {
         $lead = new Lead($request->all());
      } else {
         $lead->fill($request->all());
      }
      $lead->save();
      $request->session()->put('name', $lead->name);
      $request->session()->put('email', $lead->email);
      $request->session()->put('coupon', $lead->coupon);
      
      return redirect()->route('thanks');
   }

   public function thanks(Request $request) {
      if (session()->has('name') && session()->has('email')){
         return view('thanks', ['name'   => session('name'), 
                                'email'  => session('email'),
                                'coupon' => session('coupon')]);
      } else {
         return redirect()->route('landing');
      }
   }

   public function landing(){
      return view('landing');
   }
   
}
