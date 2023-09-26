<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use App\Http\Requests\StorepembelianRequest;
use App\Http\Requests\UpdatepembelianRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pembelian'] = Pembelian::get();
        return view('pembelian.index')->with($data);
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
    public function store(StorepembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepembelianRequest $request, pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembelian $pembelian)
    {
        //
    }
}
