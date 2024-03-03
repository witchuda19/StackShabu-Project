<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\Models\Product;
 use Illuminate\Support\Facades\File;
  
 class ProductController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         $product = Product::orderBy('created_at', 'DESC')->get();
  
         return view('products.index', compact('product'));
     }
  
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('products.create');
     }
  
     /**
      * Store a newly created resource in storage.
      */
      public function store(Request $request)
      {
          $request->validate([
              'title' => 'required|max:255|string',
              'price' => 'required|numeric',
              'product_code' => 'required|string|max:255',
              'description' => 'required|string',
              'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048', // 2MB
          ]);
  
          $productData = $request->except('image');
  
          if ($request->hasFile('image')) {
              $image = $request->file('image');
              $imageName = time().'.'.$image->getClientOriginalExtension();
              $imagePath = 'uploads/products/';
              $image->move(public_path($imagePath), $imageName);
              $productData['image'] = $imagePath.$imageName;
          }
  
          Product::create($productData);
  
          return redirect()->route('admin.products.index')->with('success', 'Product added successfully');

      }
 
  
     /**
      * Display the specified resource.
      */
     public function show(string $id)
     {
         $product = Product::findOrFail($id);
  
         return view('products.show', compact('product'));
     }
  
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         $product = Product::findOrFail($id);
  
         return view('products.edit', compact('product'));
     }
  
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         $product = Product::findOrFail($id);
  
         $product->update($request->all());
  
         return redirect()->route('admin/products')->with('success', 'product updated successfully');
     }
  
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $product = Product::findOrFail($id);
  
         $product->delete();
  
         return redirect()->route('admin/products')->with('success', 'product deleted successfully');
     }
 } 