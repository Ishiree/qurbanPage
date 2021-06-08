<?php

namespace App\Http\Controllers;

use App\Models\HewanQurban;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
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

    public function domba()
    {
        $hewan_query = HewanQurban::all();
        $param = 'domba';
        return view('transaksi', compact('hewan_query','param'));
    }
    
    public function sapi()
    {
        $hewan_query = HewanQurban::all();
        $param = 'sapi';
        return view('transaksi', compact('hewan_query', 'param'));
    }

    public function patunganSapi()
    {
        $hewan_query = HewanQurban::all();
        $param = 'sapi-patungan';
        return view('transaksi', compact('hewan_query', 'param'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required|max:14|min:11',
            'hewan_qurban_id' => 'required',
            'jumlah_hewan' => 'required',
            'donsai' => 'required',
        ]);
        
$harga = HewanQurban::find($request->hewan_qurban_id);

        $var = new Transaksi();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->hp = $request->hp;
        $var->tanggal = Date::now();
        $var->kode_transaksi = Str::random(7);
        $var->hewan_qurban_id = $request->hewan_qurban_id;
        $var->jumlah_hewan = $request->jumlah_hewan;
        $var->donasi = $harga->harga*$request->jumlah_hewan;
        $var->save();

        return view('thank-you');
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
