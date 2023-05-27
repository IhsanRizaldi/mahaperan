<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\Angkatan;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $anggota = Anggota::with('angkatan')->whereHas('angkatan', function($query) use (&$slug){
            $query->where('slug',$slug);
        })->get();
        $angkatan = Angkatan::all();
        return view('anggota.index',compact('anggota','angkatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
