<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user'] = user::orderBy('created_at')->get();
        return view('user.index', $data);
        
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
    public function store(StoreuserRequest $request)
    {
        DB::beginTransaction();
        User::create($request->all());
        DB::commit();
        return redirect('User')->with('success', 'Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserRequest $request, user $user)
    {
        $pemasok->update($request->all());

        return redirect('pemasok')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $pemasok->delete();
        return redirect('pemasok')->with('success', 'Data Berhasil Dihapus!');
    }
}
