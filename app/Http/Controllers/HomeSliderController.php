<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\HomeSlider;
use DB;

class HomeSliderController extends Controller {

    public function createHomeSlider() {

        return view('admin.Home_Slider.createHomeSlider');
    }

    public function storeHomeSlider(Request $request) {
        $this->validate($request, [
            'sliderImage' => 'required',
        ]);
//return $request->all();
        $sliderImage = $request->file('sliderImage');
        $name = $sliderImage->getClientOriginalName();




		    $uploadPath = 'public/sliderImage/';
		    $sliderImage->move($uploadPath, $name);
		    $imageUrl = $uploadPath . $name;
		    $this->saveHomeSliderInfo($request, $imageUrl);
		    return redirect('/slider/add')->with('message', 'HomeSlider info save sauccessfully');


    }

    protected function saveHomeSliderInfo($request, $imageUrl) {
        $homeSlider = new HomeSlider();

        $homeSlider->publicationStatus = $request->publicationStatus;
        $homeSlider->sliderImage = $imageUrl;
        $homeSlider->save();
    }

    public function manageHomeSlider() {
        $sliderImages = HomeSlider::where('publicationStatus', 1)->get();
        return view('admin.Home_Slider.manageHomeSlider', ['sliderImages' => $sliderImages]);
    }

    public function viewHomeSlider($id) {
        $sliderImageById = DB::table('home_sliders')
                ->where('home_sliders.id', $id)
                ->first();
        return view('admin.Home_Slider.viewHomeSlider', ['sliderImage' => $sliderImageById]);
    }

    public function editHomeSlider($id) {
//       ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers];

        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturers = Manufacturer::where('publicationStatus', 1)->get();
        $productById = HomeSlider::where('id', $id)->first();
//        return view('admin.product.editHomeSlider', ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers]);
        return view('admin.product.editHomeSlider')
                        ->with('productById', $productById)
                        ->with('categories', $categories)
                        ->with('manufacturers', $manufacturers);
    }

    public function updateHomeSlider(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $product = HomeSlider::where('id', $request->productId)->first();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
        return redirect('/product/add')->with('message', 'HomeSlider info Update Sauccessfully');
    }

    private function imageExistStatus($request) {
        $productById = HomeSlider::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            \File::delete($productById->productImage);
//            unlink();
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'public/productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }

    public function deleteHomeSlider($id) {
        $product = HomeSlider::find($id);
        $product->delete();
        return redirect('/product/add')->with('message', 'HomeSlider Information Delete Successfully');
    }

}
