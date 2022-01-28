<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function first()
    {
        $notes = DB::select('select * from tbl_notes');
        return view('mostrar',compact('notes'));
    }

    public function mostrar()
    {
        $notes=DB::select('select * from tbl_notes');
        // return view('clientes.index', compact('clientes'));
     
        return response()->json($notes);
    }

    public function delete($id)
    {
        DB::table('tbl_notes')->where('id', '=', $id)->delete();
        try {
            DB::table('tbl_notes')->where('id', '=', $id)->delete();
            return response()->json(array('resultado'=> 'OK'));
            } 
        catch (\Throwable $th) {
             return response()->json(array('resultado'=> 'NOK: '.$th->getMessage()));
    }
     
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
