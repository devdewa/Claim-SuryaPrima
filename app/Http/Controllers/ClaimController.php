<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;
use File;
use PDF;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claim = Claim::orderBy('created_at' , 'DESC')->get();
        return view('Claim.index', compact('claim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('claim.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $claim = Claim::create($request->all());
        $request->file(['image_no_series'])->move('claims-image/',$request->file(['image_no_series'])->getClientOriginalName());
        $claim->image_no_series = $request->file(['image_no_series'])->getClientOriginalName();
        $request->file(['image_no_dot'])->move('claims-image/',$request->file(['image_no_dot'])->getClientOriginalName());
        $claim->image_no_dot = $request->file(['image_no_dot'])->getClientOriginalName();
        $request->file(['image_damage_near'])->move('claims-image/',$request->file(['image_damage_near'])->getClientOriginalName());
        $claim->image_damage_near = $request->file(['image_damage_near'])->getClientOriginalName();
        $request->file(['image_damage_away'])->move('claims-image/',$request->file(['image_damage_away'])->getClientOriginalName());
        $claim->image_damage_away = $request->file(['image_damage_away'])->getClientOriginalName();
        $request->file(['image_remaining_flower'])->move('claims-image/',$request->file(['image_remaining_flower'])->getClientOriginalName());
        $claim->image_remaining_flower = $request->file(['image_remaining_flower'])->getClientOriginalName();
        $request->file(['image_entire_tire'])->move('claims-image/',$request->file(['image_entire_tire'])->getClientOriginalName());
        $claim->image_entire_tire = $request->file(['image_entire_tire'])->getClientOriginalName();
        $request->file(['image_tire_brand'])->move('claims-image/',$request->file(['image_tire_brand'])->getClientOriginalName());
        $claim->image_tire_brand = $request->file(['image_tire_brand'])->getClientOriginalName();
        $request->file(['image_tire_size'])->move('claims-image/',$request->file(['image_tire_size'])->getClientOriginalName());
        $claim->image_tire_size = $request->file(['image_tire_size'])->getClientOriginalName();
        $request->file(['image_lainnya'])->move('claims-image/',$request->file(['image_lainnya'])->getClientOriginalName());
        $claim->image_lainnya = $request->file(['image_lainnya'])->getClientOriginalName();
        $claim->save();
        return redirect(route('claim.index'))->with('insert', "Claim Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $claim = Claim::find($id);
        return view("claim.show", compact('claim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claim = Claim::find($id);
        return view("claim.edit", compact('claim'));
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
        $claim = Claim::find($id);
        $claim->update($request->all());
        if ($request->hasfile(['image_no_series']) && $request->hasfile(['image_no_dot']) && $request->hasfile(['image_damage_near']) && $request->hasfile(['image_damage_away']) && $request->hasfile(['image_remaining_flower']) && $request->hasfile(['image_entire_tire']) && $request->hasfile(['image_tire_brand']) && $request->hasfile(['image_tire_size']) && $request->hasfile(['image_lainnya'])) {
            $request->file(['image_no_series'])->move('claims-image/',$request->file(['image_no_series'])->getClientOriginalName());
            $claim->image_no_series = $request->file(['image_no_series'])->getClientOriginalName();
            $request->file(['image_no_dot'])->move('claims-image/',$request->file(['image_no_dot'])->getClientOriginalName());
            $claim->image_no_dot = $request->file(['image_no_dot'])->getClientOriginalName();
            $request->file(['image_damage_near'])->move('claims-image/',$request->file(['image_damage_near'])->getClientOriginalName());
            $claim->image_damage_near = $request->file(['image_damage_near'])->getClientOriginalName();
            $request->file(['image_damage_away'])->move('claims-image/',$request->file(['image_damage_away'])->getClientOriginalName());
            $claim->image_damage_away = $request->file(['image_damage_away'])->getClientOriginalName();
            $request->file(['image_remaining_flower'])->move('claims-image/',$request->file(['image_remaining_flower'])->getClientOriginalName());
            $claim->image_remaining_flower = $request->file(['image_remaining_flower'])->getClientOriginalName();
            $request->file(['image_entire_tire'])->move('claims-image/',$request->file(['image_entire_tire'])->getClientOriginalName());
            $claim->image_entire_tire = $request->file(['image_entire_tire'])->getClientOriginalName();
            $request->file(['image_tire_brand'])->move('claims-image/',$request->file(['image_tire_brand'])->getClientOriginalName());
            $claim->image_tire_brand = $request->file(['image_tire_brand'])->getClientOriginalName();
            $request->file(['image_tire_size'])->move('claims-image/',$request->file(['image_tire_size'])->getClientOriginalName());
            $claim->image_tire_size = $request->file(['image_tire_size'])->getClientOriginalName();
            $request->file(['image_lainnya'])->move('claims-image/',$request->file(['image_lainnya'])->getClientOriginalName());
            $claim->image_lainnya = $request->file(['image_lainnya'])->getClientOriginalName();
            $claim->save();
        }
        return redirect(route('claim.index'))->with('insert', "Claim Berhasil Di Tambah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $claim = Claim::find($id);
        $claim->delete();
        return redirect()->back()->with('delete',"claim berhasil di hapus");
    }

    public function generatePDF($id)
    {
        $claim = Claim::find($id);
        $pdf = PDF::loadView('claim.view-details-pdf', compact('claim'));
        return $pdf->stream('laporan-claim.pdf');
    }
}
