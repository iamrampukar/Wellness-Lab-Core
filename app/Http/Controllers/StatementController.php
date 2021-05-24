<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('statement.index');
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
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function show(Statement $statement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function edit(Statement $statement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statement $statement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statement $statement)
    {
        //
    }

    public function statementData(Request $request){
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;
        

        $SQL = <<<SQL
            SELECT
                DATE_FORMAT( created_at, '%Y-%m-%d' ) as 'date', amount, sample_no
            FROM
                patient_reports 
            WHERE
                DATE_FORMAT( created_at, '%Y-%m-%d' ) BETWEEN '$fromDate' 
                AND '$toDate';
        SQL;

        $SQL_TOTAL = <<<SQL
            SELECT
                SUM(amount) AS 'total_amt'
            FROM
                patient_reports 
            WHERE
                DATE_FORMAT( created_at, '%Y-%m-%d' ) BETWEEN '$fromDate' 
                AND '$toDate';
        SQL;
        $sqlResult = DB::select($SQL);
        $sqlTotalResult = DB::select($SQL_TOTAL)[0];
        $chartArray = array(
            'days'=>$sqlResult,
            'total_amt'=>$sqlTotalResult
        );
       
        return response()->json(['data'=>$chartArray]);
    }
}
