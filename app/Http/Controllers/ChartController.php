<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chart.index');
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
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        //
    }

    public function reportData() {
        $chartArray = array(
            'months'=>array(),
            'datas'=>array(),
            'total_amt'=>0
        );

        $SQL = <<<SQL
            SELECT DATE_FORMAT(created_at,'%b') AS month, SUM(amount) AS total_amt FROM patient_reports GROUP BY DATE_FORMAT(created_at,'%Y-%M')
        SQL;
        $sqlResult = DB::select($SQL);
        $totalAmount = 0;
        if(!empty($sqlResult)) {
            foreach ($sqlResult as $key => $value) {
                $chartArray['months'][] = $value->month;
                $chartArray['datas'][] = $value->total_amt;
                $totalAmount += $value->total_amt;
            }
            $chartArray['total_amt'] = $totalAmount;
        }
        return response()->json(['data'=>$chartArray]);
    }
}
