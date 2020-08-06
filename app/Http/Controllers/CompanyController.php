<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
  public function show(Request $request){
      $company = Company::findOrFail(1);
      return view('company')->with('company',$company);
  }
  public function update(Request $request){

  }
}
