<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',

        ]);

        if( $validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->save();

            return response()->json([
                'status'=>200,
                'success' => true,
                'product' => $product
            ]);
        }
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
        try {
            $product = Product::findOrFail($id);
            $product->delete();
    
            return response()->json(['success' => true, 'message' => 'Produit supprimé avec succès.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Produit introuvable ou erreur lors de la suppression.']);
        }
    }
    
    
    
    
}
