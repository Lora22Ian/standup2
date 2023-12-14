<?php 

namespace App\Http\Controllers; 

use App\Models\Comediant; 

use App\Http\Requests; 

use Illuminate\Http\Request; 

class ComediantController extends Controller 

{ 

    /** 

     * Display a listing of the resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function index(Request $request)  

    {  

 

        $comedians = Comediant::orderBy('name','ASC')->paginate(5);  

 

        $value=($request->input('page',1)-1)*5;  

 

        return view('comedians.list',compact('comedians'))->with('i',$value);  

    }  

    /** 

     * Show the form for creating a new resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function create() 

    { 

        return view('comedians.create');  

    } 

    /** 

     * Store a newly created resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @return \Illuminate\Http\Response 

     */ 

    public function store(Request $request) 

    { 

        $this->validate($request, ['name' => 'required','description' => 'required']);  

 

         // create new task  

 

         Comediant::create($request->all());  

 

         return redirect()->route('comedians.index')->with('success', 'Your comediant added successfully!'); 

    } 

    /** 

     * Display the specified resource. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function show(string $id) 

    { 

        $comediant = Comediant::find($id);  

 

        return view('comedians.show',compact('comediant'));   

    } 

    /** 

     * Show the form for editing the specified resource. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function edit(string $id) 

    { 

        $comediant = Comediant::find($id); 

        return view('comedians.edit', compact('comediant')); 

    } 

    /** 

     * Update the specified resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function update(Request $request, string $id) 

    { 

        $this->validate($request, [ 

            'name' => 'required', 

            'description' => 'required' 

        ]); 

        Comediant::find($id)->update($request->all()); 

        return redirect()->route('comedians.index')->with('success','Comediant updated successfully');     

    } 

    /** 

     * Remove the specified resource from storage. 

     * 

     * @param  int  $id 

     * @return \Illuminate\Http\Response 

     */ 

    public function destroy($id) 

    { 

        Comediant::find($id)->delete(); 

        return redirect()->route('comedians.index')->with('success','Comediant removed successfully'); 

    } 

}