<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;


class productController extends Controller
{
    function __construct() {
        $this->products = new products();
    }
    public function index(){
        //$this->products->getProducts();
        return view('home');
    }
    public function save_products(Request $request){
        $data = [
            'p_name' => $request->p_name,
            'description' => $request->description,
            'price' => $request->price,
            'quantityinstock' => $request->quantityinstock,
        ];
        $this->products->saveProducts($data);
        return back();
    }
}
