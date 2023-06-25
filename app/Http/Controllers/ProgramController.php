<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->has('search')){
            $data = Program::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('deskripsi','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Program::simplePaginate(2);
        }
        return view('dataprogram',compact('data'));
    }
    public function tambahprogram(){
        return view('tambahprogram');
    }
    public function insertprogram(Request $request){
        $data = Program::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoprogram/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dataprogram');
    }
    public function tampilprogram($id){
        $data = Program::find($id);
        // dd($data);
        return view('tampilprogram',compact('data'));
    }
    public function updateprogram(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $data = Program::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotoprogram/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;

        $data->save();
        return redirect()->route('dataprogram');
        
     }
    public function deleteprogram($id){
        $data = Program::find($id);
        $data->delete();
        return redirect()->route('dataprogram');
    }
    public function program(Request $request){
        // if($request->has('search')){
        //     $data = program::where('nama','LIKE','%'.$request->search.'%')
        //     ->orwhere('program','LIKE','%'.$request->search.'%')->paginate(9);
        // }else{
            $data = Program::simplePaginate(9);
        // }
        return view('program',compact('data'));
     }
     
     public function programdetail($id){
        $data = Program::find($id);
        return view('programdetail',compact('data'));
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
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
