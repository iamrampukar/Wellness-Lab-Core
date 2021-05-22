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
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Report</h3>
                            View Report
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- /.d-flex -->
                        <div class="position-relative mb-4">
                            <canvas id="report-chart" height="300"></canvas>
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
<script>
    function chartConfigData(chartData) {
        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }
        var mode = 'index'
        var intersect = true
        // Report Dashboard
       
        var chartData = {
            type: 'bar',
            data: {
            labels: chartData.years,//['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [
                {
                backgroundColor: '#007bff',
                borderColor: '#007bff',
                data: chartData.datas//[1000, 2000, 3000, 2500, 2700, 2500, 3000]
                }
            ]
            },
            options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                // display: false,
                gridLines: {
                    display: true,
                    lineWidth: '4px',
                    color: 'rgba(0, 0, 0, .2)',
                    zeroLineColor: 'transparent'
                },
                ticks: $.extend({
                    beginAtZero: true,

                    // Include a dollar sign in the ticks
                    callback: function (value, index, values) {
                    if (value >= 1000) {
                        value /= 1000
                        value += 'k'
                    }
                    return '$' + value
                    }
                }, ticksStyle)
                }],
                xAxes: [{
                display: true,
                gridLines: {
                    display: false
                },
                ticks: ticksStyle
                }]
            }
            }
        };
        return chartData;
    } // funnction end

    $(function () {
        'use strict'
        $.ajax({
            url: 'http://127.0.0.1:8000/chart/report-data',
            type: 'GET',
            dataType: 'json',
            // data: {param1: 'value1'},
        })
        .done(function(res) {
            var resData = res.data;
            var $getChartData = chartConfigData(resData);
            var $reportChart = $('#report-chart');
            var reportChart = new Chart($reportChart,$getChartData);
        })
        .fail(function() {
            console.log("error");
        });
        
    })
</script>
@endpush
