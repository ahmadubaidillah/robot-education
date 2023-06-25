<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->has('search')){
            $data = Product::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('deskripsi','LIKE','%'.$request->search.'%')->paginate(9);
        }else{
            $data = Product::simplePaginate(9);
        }
        return view('dataproduct',compact('data'));
    }
    public function tambahproduct(){
        return view('tambahproduct');
    }
    public function insertproduct(Request $request){
        $data = Product::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoproduct/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dataproduct');
    }
    public function tampilproduct($id){
        $data = Product::find($id);
        // dd($data);
        return view('tampilproduct',compact('data'));
    }
    public function updateproduct(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $data = Product::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotoproduct/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->link = $request->link;

        $data->save();
        return redirect()->route('dataproduct');
        
     }
    public function deleteproduct($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('dataproduct');
    }
    public function product(Request $request){
        // if($request->has('search')){
        //     $data = product::where('nama','LIKE','%'.$request->search.'%')
        //     ->orwhere('product','LIKE','%'.$request->search.'%')->paginate(9);
        // }else{
            $data = Product::simplePaginate(9);
        // }
        return view('product',compact('data'));
     }
     
     public function productdetail($id){
        $data = Product::find($id);
        return view('productdetail',compact('data'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
