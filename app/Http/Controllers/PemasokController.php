<?php

namespace App\Http\Controllers;

use App\Models\Pemasok  ;
use App\Http\Requests\StorePemasokRequest;
use App\Http\Requests\UpdatePemasokRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $data['pemasok'] = Pemasok::get();
            return view('pemasok.index')->with($data);
    }

    /**
     * Show the form for creating a neRRw resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePemasokRequest $request)
    {
        {
            DB::beginTransaction();
            Pemasok::create($request->all());
            DB::commit();
            return redirect('pemasok')->with('success', 'Data produk berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemasok $pemasok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePemasokRequest $request, pemasok $pemasok)
    {
        $pemasok->update($request->all());

        return redirect('pemasok')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemasok $pemasok)
    {
        {
            $pemasok->delete();
            return redirect('pemasok')->with('success', 'Data Berhasil Dihapus!');
        }
    }

}