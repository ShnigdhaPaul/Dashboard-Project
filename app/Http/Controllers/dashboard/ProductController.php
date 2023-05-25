<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Jobs\NotifyUsersForProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('dashboard.products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        
       return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create',Product::class);
        $request->validate([
            'name'=> ['required'],
            'quantity'=>[ 'required'],
            'amount'=>['required'],
            
               ]);
               //try{
           
                 $product= Product::create([
                     'name'=>$request->input('name'),
                     'quantity'=>$request->input('quantity'),
                     'amount'=>$request->input('amount'),
                     'user_id'=> Auth::id(),
                   
           
                 ]);
                  NotifyUsersForProduct::dispatch($product);
          
                 return redirect()->route('product.index')->with('msg', 'product added ');
               //}catch(\Exception $e){
           
                // return redirect()->back()->with('msg', 'product NOT ADDED. Please try again');
              // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
