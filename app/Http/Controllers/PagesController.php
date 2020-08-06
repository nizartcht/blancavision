<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index(Request $request)
     {
         $zero = encrypt(0);
         $p = $request->get('p')??$zero;

         $pid = $request->get("product")??$zero;
         $pid = decrypt($pid);
         $p = decrypt($p);

         if($pid >0){
             $product = Product::where("id",$pid)->first();

         }else {
             if ($p < 0) {
                 $p = 0;
             }
             $product = Product::skip($p)->first();
         }
         if (!$product) abort(404);
         return view("index", ["product" => $product, 'page' => $p]);

     }

}
