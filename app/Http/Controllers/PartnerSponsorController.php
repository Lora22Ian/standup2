<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PartnerSponsor;
use App\Http\Requests;

class PartnerSponsorController extends Controller {

    public function index(Request $request) {
        $partnerSponsors = PartnerSponsor::orderBy('name', 'ASC')->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('partnerSponsors.list', compact('partnerSponsors'))->with('i', $value);
    }

    public function create() {
        return view('partnerSponsors.create');
    }

    public function store(Request $request) {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'phone' => 'required']);
        PartnerSponsor::create($request->all());
        return redirect()->route('partnerSponsors.index')->with('success', 'Your partner/sponsor added successfully!');
    }

    public function show(string $id) {
        $partnerSponsor = PartnerSponsor::find($id);
        return view('partnerSponsors.show', compact('partnerSponsor'));
    }

    public function edit(string $id) {
        $partnerSponsor = PartnerSponsor::find($id);
        return view('partnerSponsors.edit', compact('partnerSponsor'));
    }

    public function update(Request $request, string $id) {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'phone' => 'required']);
        PartnerSponsor::find($id)->update($request->all());
        return redirect()->route('partnerSponsors.index')->with('success', 'Partner/Sponsor updated successfully');
    }

    public function destroy(string $id) {
        PartnerSponsor::find($id)->delete();
        return redirect()->route('partnerSponsors.index')->with('success', 'Partner/Sponsor removed successfully');
    }
}
