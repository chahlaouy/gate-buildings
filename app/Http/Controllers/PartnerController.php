<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('partners.index', [
            'records' => Partner::simplePaginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'logo' => 'required|image'
        ]);

        $logo = $request->file('logo');
        $var = date_create();
        $time = date_format($var, 'YmdHis');
        $logoUrl = $time . '-' . $logo->getClientOriginalName();
        $logo->move(public_path() . '/uploads/partners-logo/', $logoUrl);

        Partner::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'logo' => $logoUrl,
            'siteUrl' => $request->siteUrl
        ]);

        return back()->with('success', 'Partner Created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partners.edit', [
            'record' => $partner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'logo' => 'required|image'
        ]);

        if($request->has('logo')){
            $logo = $request->file('logo');
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $logoUrl = $time . '-' . $logo->getClientOriginalName();
            $logo->move(public_path() . '/uploads/partners-logo/', $logoUrl);

            $partner->logo = $logoUrl;
        }

        $partner->name = $request->name;
        $partner->slug = $request->slug;
        $partner->description = $request->description;
        $partner->siteUrl = $request->siteUrl;
        $partner->update();

        return redirect('/partners')->with('success', 'Partner Created successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return response()->json('success', 'Partner Deleted Successfully');
    }
}
