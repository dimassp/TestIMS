<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\InstalmentSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('instalment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instalment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd("Function store");
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

    public function search(Request $request)
    {
        $query = InstalmentSchedule::query();

        $instalment_schedule_count = $query->count();

        $instalment_schedule = $query
            ->get();

        $data = array();

        foreach ($instalment_schedule as $key => $value) {

            array_push($data, array(
                $value->kontrak_no,
                $value->angsuran_ke,
                "Rp. ".  number_format($value->angsuran_per_bulan, 0, '.'),
                $value->sudah_bayar,
                Carbon::parse($value->tanggal_jatuh_tempo)->format('d F Y'),
            ));
        }

        return array(
            "draw"              => $request->get('draw', 0),
            "data"              => $data,
            "recordsTotal"      => $instalment_schedule_count,
            "recordsFiltered"   => $instalment_schedule_count
        );
    }

    public function search_kontrak(Request $request)
    {
        $query = Contract::query();

        $contract_count = $query->count();

        $contract_list = $query
            ->get();

        $data = array();

        foreach ($contract_list as $key => $value) {
            array_push($data, array(
                $value->kontrak_no,
                $value->client_name,
                "Rp. ".  number_format($value->otr, 0, '.'),
                "Rp. ".  number_format($value->down_payment, 0, '.'),
                number_format($value->jangka_waktu, 0, '.'). " bulan",
            ));
        }

        return array(
            "draw"              => $request->get('draw', 0),
            "data"              => $data,
            "recordsTotal"      => $contract_count,
            "recordsFiltered"   => $contract_count
        );
    }
}
