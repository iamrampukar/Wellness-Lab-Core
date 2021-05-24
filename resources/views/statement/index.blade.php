@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Report Dashboard</h1>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="firstName">From Date</label>
                                        <input type="text" id="from_date" class="form-control form-control-sm" placeholder="From Date" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="firstName">To Date</label>
                                        <input type="text" id="to_date" class="form-control form-control-sm" placeholder="To Date" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">
                            <b>From Date:</b> <span id="show_from_date"></span>
                            <b>To Date:</b> <span id="show_to_date"></span>
                            </h3>
                            <span id="total_amount"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- /.d-flex -->
                        <div class="position-relative mb-4">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>DESCRIPTION</th>
                                        <th>DATE</th>
                                        <th>AMOUNT</th>
                                    </tr>
                                </thead>
                                <tbody id="tbl_statement">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
            <!-- /.content -->
@endsection

@push('scripts')
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/js/datepickers.js') }}"></script>
@endpush

@push('scripts')
<script>
    function dateDiff(fromDate,toDate) {
        return moment(fromDate).format("YYYY-MM-DD") < moment(toDate).format("YYYY-MM-DD");
    }

    function fetchStatementData(fromDate,toDate) {
        $('#show_from_date').html(fromDate);
        $('#show_to_date').html(toDate);
        $.ajax({
            url: 'http://127.0.0.1:8000/statement/statement-data',
            type: 'GET',
            dataType: 'json',
            data: {fromDate: fromDate, toDate:toDate},
        })
        .done(function(res) {
            var resData = res.data;
            var htmlTable = "";
            var index = 0;
            for (const dayItem of resData.days) {
                var tableRow = `
                <tr>
                    <td>${++index}</td>
                    <td>${dayItem.sample_no}</td>
                    <td>${dayItem.date}</td>
                    <td>${parseFloat(dayItem.amount).toFixed(2)}</td>
                </tr>`;
                htmlTable+=tableRow;
            }
            var tableRow = `
                <tr>
                    <td></td>
                    <td><b>Total Amount:</b></td>
                    <td></td>
                    <td><b>${parseFloat(resData.total_amt.total_amt).toFixed(2)}</b></td>
                </tr>`;
            htmlTable+=tableRow;
            $('#total_amount').html('<b>Total Amount:</b> ' + parseFloat(resData.total_amt.total_amt).toFixed(2));
            $('body #tbl_statement').html(htmlTable);
        })
        .fail(function() {
            console.log("error");
        });
    }
    
    $(function () {
        'use strict'
        $('#from_date').change(function(){
            var fromDate = $('#from_date').val();
            var toDate = $('#to_date').val();
            var diff =dateDiff(fromDate,toDate);
            if(diff) {
                fetchStatementData(fromDate,toDate);
            }
        });

        $('#to_date').change(function(){
            var fromDate = $('#from_date').val();
            var toDate = $('#to_date').val();
            var diff =dateDiff(fromDate,toDate);
            if(diff) {
                fetchStatementData(fromDate,toDate);
            }
        });
    })
</script>
@endpush
