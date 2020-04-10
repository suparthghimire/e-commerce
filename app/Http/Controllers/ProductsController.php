<?php

namespace App\Http\Controllers;
use App\Hoodie;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $hoodies = Hoodie::all();
        return view('product.index')->withHoodies($hoodies);
    }
    public function cart(){
        return view('cart.index');
    }
    public function show($id){
        $hoodies = Hoodie::find($id);
        return view('product.show')->withHoodies($hoodies);
    }
    public function add_to_cart($id){
        $hoodies = Hoodie::find($id);
        if(!$hoodies){
            abort(404);
       }
       $cart = session()->get('cart');
        //   cart empty
        if(!$cart){
            // add items to cart
            $cart = [
                $id => [

                    "id"=>$hoodies->id,
                    "name"=>$hoodies->name,
                    "quantity"=>1,
                    "price"=>$hoodies->sellingPrice,
                    "image"=>$hoodies->image,
                    "description"=>$hoodies->description
                ],
            ];
            session()->put('cart',$cart);
            session()->flash('success','Item Added to Cart Successfully!');
            return redirect()->view('cart.index');
        }
        // if cart is not empty, check if product already exosts in the cart
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            session()->flash('success',"Item Added to Cart Successfully!");
            return redirect()->back();
        }
        // if cart is not empty and item is not in the cart
        $cart[$id] = [
            "id"=>$hoodies->id,
            "name"=>$hoodies->name,
            "quantity"=>1,
            "price"=>$hoodies->sellingPrice,
            "image"=>$hoodies->image,
            "description"=>$hoodies->description
        ];
        session()->put('cart',$cart);
        session()->flash('success','Item Added to Cart Successfully!');
        return redirect()->view('cart.index');
    }
    public function removeItem($id){
        session()->flash('success','Removed');
        return view('cart.index');
    }

}
