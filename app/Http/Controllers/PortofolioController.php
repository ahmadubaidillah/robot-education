<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->has('search')){
            $data = Portofolio::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('judul','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Portofolio::simplePaginate(2);
        }
        return view('dataportofolio',compact('data'));
    }
    public function tambahportofolio(){
        return view('tambahportofolio');
    }
    public function insertportofolio(Request $request){
        $data = Portofolio::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoportofolio/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dataportofolio');
    }
    public function tampilportofolio($id){
        $data = Portofolio::find($id);
        // dd($data);
        return view('tampilportofolio',compact('data'));
    }
    public function updateportofolio(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $data = Portofolio::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotoportofolio/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->judul = $request->judul;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->quote = $request->quote;
        $data->penulis = $request->penulis;

        $data->save();
        return redirect()->route('dataportofolio');
        
     }
    public function deleteportofolio($id){
        $data = Portofolio::find($id);
        $data->delete();
        return redirect()->route('dataportofolio');
    }
    public function portofolio(Request $request){
        // if($request->has('search')){
        //     $data = portofolio::where('nama','LIKE','%'.$request->search.'%')
        //     ->orwhere('portofolio','LIKE','%'.$request->search.'%')->paginate(9);
        // }else{
            $data = Portofolio::simplePaginate(2);
        // }
        return view('portofolio',compact('data'));
     }
     
     public function portofoliodetail($id){
        $data = Portofolio::find($id);
        return view('portofoliodetail',compact('data'));
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
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
