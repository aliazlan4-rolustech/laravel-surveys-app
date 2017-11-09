@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Investor DNA Profiles Generated
                            <small>Last 12 months</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChart" height="50"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <a href="/reports/view">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-dollar fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Tokens Used </span>
                                    <h2 class="font-bold"> </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <a href="/reports/view">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-file fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Completed Investor DNA Profiles </span>
                                    <h2 class="font-bold"> </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Last 5 Investor DNA Profiles Generated</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Created Date</th>
                                <th>Investor DNA Profile</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-white btn-bitbucket" target="_blank" href="/reports/view/">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{!! asset('theme/js/plugins/Chart.min.js') !!}"></script>

    <script>
        var ctx = document.getElementById("lineChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: '# of Investor DNA Profiles',
                    data: [12, 19, 3, 5, 2, 3, 13, 14, 17, 20, 20, 12],
                    backgroundColor: 'rgba(26,179,148,0.5)',

                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 1,
                            max: 20,
                            stepSize: 5,
                        }
                    }]
                }
            }
        });



    </script>

@endsection
