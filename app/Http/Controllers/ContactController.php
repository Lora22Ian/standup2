<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

use App\Models\Contact; 

use App\Http\Requests; 


  

class ContactController extends Controller 

{ 

    /** 

     * Display a listing of the resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function index(Request $request) 

    { 

        $contacts = Contact::orderBy('name','ASC')->paginate(5); 

        $value=($request->input('page',1)-1)*5; 

        //$value = ($contacts->currentPage() - 1) * $contacts->perPage(); 

        return view('contacts.list',compact('contacts'))->with('i',$value); 

    } 

  

    /** 

     * Show the form for creating a new resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function create() 

    { 

        return view('contacts.create'); 

    } 

  

    /** 

     * Store a newly created resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @return \Illuminate\Http\Response 

     */ 

    public function store(Request $request) 

    { 

        $this->validate($request, [ 

            'name' => 'required', 

            'email' => 'required|email', 

            'phone' => 'required|numeric', 

        ]); 

        // create new task 

        Contact::create($request->all()); 

        return redirect()->route('contacts.index')->with('success', 'Your contact added successfully!'); 

    } 

  

    /** 

     * Display the specified resource. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function show($id) 

    { 

        $contact = Contact::find($id);   

        return view('contacts.show',compact('contact'));  

    } 

  

    /** 

     * Show the form for editing the specified resource. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function edit($id) 

    { 

        $contact = Contact::find($id); 

        return view('contacts.edit', compact('contact')); 

  

    } 

  

    /** 

     * Update the specified resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function update(Request $request, $id) 

    { 

        $this->validate($request, [ 

            'name' => 'required', 

            'email' => 'required|email', 

            'phone' => 'required|numeric' 

            ]); 

            Contact::find($id)->update($request->all()); 

            return redirect()->route('contacts.index')->with('success','Contact updated successfully'); 

    } 

  

    /** 

     * Remove the specified resource from storage. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function destroy($id) 

    { 

        Contact::find($id)->delete(); 

        return redirect()->route('contacts.index')->with('success','Contact removed successfully'); 

    } 

} 