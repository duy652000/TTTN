<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
       return view ('fAdmin/admin_index') ;
    }
//product
    public function product(){
        return view ('fAdmin/admin_product') ;
     }
     public function addproduct(){
        return view ('fAdmin/addproduct') ;
     }
     public function editproduct(){
        return view ('fAdmin/editproduct') ;
     }

     //category
     public function category(){
        return view ('fAdmin/admin_category') ;
     }
     public function addcategory(){
        return view ('fAdmin/addcategory') ;
     }
     public function editcategory(){
        return view ('fAdmin/editcategory') ;
     }


//account
     public function account(){
        return view ('fAdmin/admin_account') ;
     }
     public function addaccount(){
        return view ('fAdmin/addaccount') ;
     }
     public function editaccount(){
        return view ('fAdmin/editaccount') ;
     }

//oders
     public function oders(){
        return view ('fAdmin/admin_oders') ;
     }
     public function detailoders(){
        return view ('fAdmin/detailoders') ;
     }






    
}
