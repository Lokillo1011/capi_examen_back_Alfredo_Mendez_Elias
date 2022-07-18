<?php

namespace App\Http\Controllers;

use App\Models\UserDomicilio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Obtiene todos los usuarios y sus domicilios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserDomicilio::all();
        foreach ($users as $user) {
            $user->edad = date('Y') - date('Y', strtotime($user->fecha_nacimiento));
        }
        if (count($users) == 0) return response()->json(['estado' => false, 'detalle' => 'No hay usuarios registrados.'], 404);
        return response()->json(['estado' => true, 'detalle' => $users], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
