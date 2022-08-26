<?php

namespace App\Http\Controllers;

use App\Models\PemilikBisnis;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PemilikBisnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        return view('module.masterdata.daftarpemilikbisnis.index');

    }

    public function json() {
        return Datatables::of(PemilikBisnis::limit(10))
        ->addColumn('aksi', function($data){
                     $button = "<span><a href='".$data->id."' class='edit btn-primary btn-xs' id='".$data->id."'><i class='fa fa-pencil'></i></a></span>";
                     $button .= "<span><a href='".$data->id."' class='lihat btn-danger btn-xs' id='".$data->id."'><i class='fa fa-eye'></i></a></span>";
                     $button .= "<span><a href='".$data->id."' class='hapus btn-success btn-xs' id='".$data->id."'><i class='fa fa-trash'></i></a></span>";
                     return $button;
                 })
        ->rawColumns(['aksi'])
        ->make(true);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
