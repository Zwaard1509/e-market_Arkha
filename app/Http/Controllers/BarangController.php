<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Http\Requests\StorebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['barang'] = barang::orderBy('created_at', 'DESC')->get();

        return view('barang.index')->with($data);
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
    public function store(StorebarangRequest $request)
    {
         
            DB::beginTransaction();
            Barang::create($request->all());
            DB::commit();
            return redirect('barang')->with('success', 'Data barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebarangRequest $request, barang $barang)
    {
        $barang->update($request->all());
        return redirect('barang')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        try {
            $barang->delete();
            return redirect('barang')->with('success', 'Data Berhasil Dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }
}
