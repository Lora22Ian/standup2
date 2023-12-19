<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Models\PartnerSponsor; 
use App\Models\Event;
use App\Models\SpContact; 
use App\Http\Requests; 

  

class SpContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $spContacts = SpContact::all(); 

        $partnerSponsors = PartnerSponsor::all(); 

        $events = Event::all(); 

       // $agendas = Agenda::orderBy('id_rep_cont','ASC')->paginate(5); 

        //$value=($request->input('page',1)-1)*5; 

        foreach ($spContacts as $spContact) 

        { 

        $spContact->event_name = $spContact->event->name; 

        $spContact->partnerSponsor_name = $spContact->partnerSponsor->name; 

        } 

        //return view('eventContacts.list',compact('eventContacts'))->with('i',$value); 

        return view('spContacts.list', compact('spContacts', 'partnerSponsors', 'events'));
        //->with('i', $value); 

  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partnerSponsors = PartnerSponsor::all(); 

        $events = Event::all(); 

        return view('spContacts.create', compact('partnerSponsors', 'events'));
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
        'id_sp' => 'required', 
    ]); 

    // create new agenda 
    SpContact::create($request->all()); 

    return redirect()->route('spContacts.index')->with('success', 'Your sponsor/partner contact added successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $spContact = SpContact::find($id);    

        return view('spContacts.show',compact('spContact'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spContact = SpContact::find($id);  

        return view('spContacts.edit', compact('spContact'));  
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
        'id_sp' => 'required',  
    ]);  

    EventContact::find($id)->update($request->all());  

    return redirect()->route('spContacts.index')->with('success','Sponsor/partner contact updated successfully');  
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
        return redirect()->route('spContacts.index')->with('success','Sponsor/Partner contact removed successfully'); 
    }
}
