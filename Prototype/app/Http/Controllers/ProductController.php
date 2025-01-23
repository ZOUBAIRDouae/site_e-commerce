<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use    App\Repositories\ProductRepository;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->ProductRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->ProductRepository->all();
        return view('admin.index', compact('products'));
    }


    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $product = new Product();

        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $$product->category_id = $data['category_id'];
        $product->user_id = auth()->user()->id;
        $product->image = $data['image']->store('public/images');
        $product->save();
        return redirect()->route('admin.index')->with('success', 'product created successfully!');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

 
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'product deleted successfully!');
    }
}
