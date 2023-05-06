<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->has('search')){
            $data = Contact::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('email','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Contact::simplePaginate(2);
        }
        return view('datacontact',compact('data'));
    }
    public function tambahcontact(){
        return view('tambahcontact');
    }
    public function insertcontact(Request $request){
        $data = Contact::create($request->all());
        return redirect()->route('contact');
    }
   
    public function deletecontact($id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('datacontact');
    }
    public function contact(Request $request){
        // if($request->has('search')){
        //     $data = contact::where('nama','LIKE','%'.$request->search.'%')
        //     ->orwhere('contact','LIKE','%'.$request->search.'%')->paginate(9);
        // }else{
            $data = Contact::simplePaginate(2);
        // }
        return view('contact',compact('data'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
