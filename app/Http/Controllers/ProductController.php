<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {

         $data = Product::all();
        // $data = Product::GetData();
        return $data;
    }

    public function create()
    {
        return view('product.create');
        
    }


    public function store(Request $request)
    {
        // $pro = new Product();
        // $pro->title = $request->title;
        // $pro->price = $request->price;
        // $pro->save();

        Product::create([
            'title'=>$request->title,
            'price'=>$request->price
        ]);
        
        return $request;
    }

   
    public function show(Product $product)
    {
                           
    }


    public function edit($id)
    {

        $data =  Product::findorfail($id);
return view('product.edit',compact('data'));
    }

 
    public function update(Request $request,  $id)
    {
        // $data = Product::findorfail($id);
        // $data->title = $request->title;
        // $data->price = $request->price;
        // $data->save();

         Product::findorfail($id)->update(
            $request->all()
        );

        // $data->update([
//     'title'=>$request->title,
//     'price'=>$request->price

// ]);
        

        return redirect()->route('product.index');


    }

   
    public function destroy($id)
    {
     
        //Product::findorfail($id)->delete();
        Product::destroy($id);
        

        return redirect()->route('product.index');
        
    }
}
