<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function create(){
        return view('frontend.product-create');
    }

    public function store(ProductFormRequest $request){

        $request->validated();
        
// $validator = Validator::make($request->all(), [
//     'name' => ['required', 'min:3', 'max:255', 'string'],
//     'description' => 'required|string',
//     'price' => 'required|string',
//     'stock' => 'required|string',
//     'is_active' => 'sometimes',
// ], [
//     'name.required' => 'Product name cannot be empty',
//     'name.min' => 'Give at least 3 characters',
// ]);

// if ($validator->fails()) {
//     return redirect()->back()->withErrors($validator)->withInput();
// }

    }
}


    //     $request->validate([
    //         'name'=>'required|min:3|max:255|string',
    //         'description'=>'required|string',
    //         'price'=>'required|string',
    //         'stock'=>'required|string',
    //         'is_active'=>'sometimes'

    //     ],
    //     [
    //         'name.required' => 'Product name cannot be empty',
    //         'name.min' => 'Give atleast 3 characters'
    //     ]
    // );