<?php

 namespace App\Http\Controller;
   
 use Illuminate\Http\Request;

 class PrincipalController extends Controller
 {
    public function principal(){
        return view ('site.principal');
    }
 }