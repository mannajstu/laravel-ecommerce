<?php

namespace App\Http\Controllers;
use App\HomeSlider;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller
{
    public function index() {
        $publishedProducts=Product::where('publicationStatus', 1)->get();
	    $publishedHomeSlider=HomeSlider::where('publicationStatus', 1)->get();
        return view('frontEnd.home.homeContent', [
        	'publishedProducts' => $publishedProducts,
	        'publishedHomeSliders'=>$publishedHomeSlider



        ]);
    }
    public function category($id) {
        $publishedCategoryProducts=Product::where('categoryId', $id)
                                                    ->where('publicationStatus', 1)
                                                    ->get();
        return view('frontEnd.category.categoryContent', ['publishedCategoryProducts'=>$publishedCategoryProducts]);
    }
    public function productDetails($id) {
        $productById=Product::where('id', $id) ->first();
         return view('frontEnd.product.productContent', ['productById'=>$productById]);
    }
    public function productSearchDetails(Request $request) {
        $inputText=$request->input('inputtext');
        $categoryid=$request->input('categoryid');
        $product= Product::all();
        return $product[0]->productName;
//        if(strpos($product->productName,$inputText)!== false){
//            return $inputText;
//        }
    }
    
}
















