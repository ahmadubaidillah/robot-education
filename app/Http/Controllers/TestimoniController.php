<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->has('search')){
            $data = Testimoni::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('testimoni','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Testimoni::simplePaginate(2);
        }
        return view('datatestimoni',compact('data'));
    }
    public function tambahtestimoni(){
        return view('tambahtestimoni');
    }
    public function inserttestimoni(Request $request){
        $data = Testimoni::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototestimoni/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datatestimoni');
    }
    public function tampiltestimoni($id){
        $data = Testimoni::find($id);
        // dd($data);
        return view('tampiltestimoni',compact('data'));
    }
    public function updatetestimoni(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $data = Testimoni::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fototestimoni/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->nama = $request->nama;
        $data->testimoni = $request->testimoni;

        $data->save();
        return redirect()->route('datatestimoni');
        
     }
    public function deletetestimoni($id){
        $data = Testimoni::find($id);
        $data->delete();
        return redirect()->route('datatestimoni');
        
     }
     public function testimoni(Request $request){
        // if($request->has('search')){
        //     $data = Testimoni::where('nama','LIKE','%'.$request->search.'%')
        //     ->orwhere('testimoni','LIKE','%'.$request->search.'%')->paginate(9);
        // }else{
            $data = Testimoni::simplePaginate(9);
        // }
        return view('testimoni',compact('data'));
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
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
