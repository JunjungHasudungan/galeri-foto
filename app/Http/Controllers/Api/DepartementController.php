<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Resources\{ DepartementResource, DepartementCollection };
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        try {
            return new DepartementCollection(Departement::with('users')->get());
        } catch (\Exception $e) {
            throw new  GeneralException(trans('system.server_error'), null, [trans('system.server_error')]);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'          => 'required|min:3',
                'created_at'    => now()
            ]);

            Departement::insert($validated);
            return response()->json([
                'Data Berhasil ditambahkan..'
            ]);

        } catch (\Exception $e) {
            throw new  GeneralException(trans('system.server_error'), null, [trans('system.server_error')]);
        }
    }

    public function show(Departement $departement)
    {
        try {
            return new DepartementResource($departement);
        }  catch (\Exception $e) {
            throw new  GeneralException(trans('system.server_error'), null, [trans('system.server_error')]);
        }
    }

    public function edit(Departement $departement)
    {

    }

    public function update(Request $request, Departement $departement)
    {
        //
    }

    public function destroy(Departement $departement)
    {
        //
    }
}
