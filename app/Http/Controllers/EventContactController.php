<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Models\Contact; 
use App\Models\Event;
use App\Models\EventContact; 
use App\Http\Requests; 

  

class EventContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventContacts = EventContact::all(); 

        $contacts = Contact::all(); 

        $events = Event::all(); 

       // $agendas = Agenda::orderBy('id_rep_cont','ASC')->paginate(5); 

        //$value=($request->input('page',1)-1)*5; 

        foreach ($eventContacts as $eventContact) 

        { 

        $eventContact->event_name = $eventContact->event->name; 

        $eventContact->contact_name = $eventContact->contact->name; 

        } 

        //return view('eventContacts.list',compact('eventContacts'))->with('i',$value); 

        return view('eventContacts.list', compact('eventContacts', 'contacts', 'events'));
        //->with('i', $value); 

  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all(); 

        $events = Event::all(); 

        return view('eventContacts.create', compact('contacts', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [ 
        'id_event' => 'required', 
        'id_contact' => 'required', 
    ]); 

    // create new agenda 
    EventContact::create($request->all()); 

    return redirect()->route('eventContacts.index')->with('success', 'Your event contact added successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $eventContact = EventContact::find($id);    

        return view('eventContacts.show',compact('eventContact'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventContact = EventContact::find($id);  

        return view('eventContacts.edit', compact('eventContact'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [  
        'id_event' => 'required',  
        'id_contact' => 'required',  
    ]);  

    EventContact::find($id)->update($request->all());  

    return redirect()->route('eventContacts.index')->with('success','event contact  updated successfully');  
}

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();  
        return redirect()->route('eventContacts.index')->with('success','Event contact removed successfully'); 
    }
}
