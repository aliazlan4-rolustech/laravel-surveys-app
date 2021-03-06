@extends('layouts.app')

@section('content')


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Investor DNA Profile Status</th>
                                    <th>Investor DNA Profile</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--@foreach($advisors as $advisor)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ $advisor["name"] }}</td>--}}
                                        {{--<td>{{ $advisor["email"] }}</td>--}}
                                        {{--<td>{{ $advisor["mobile_number"] }}</td>--}}
                                        {{--<td>{{ $advisor["company_position"] }}</td>--}}
                                        {{--<td>65</td>--}}
                                        {{--<td>Active</td>--}}
                                        {{--<td><a class="btn btn-white btn-bitbucket" onclick="approveAdvisor({{ $advisor["id"] }}, '{{ $advisor["name"] }}')">--}}
                                                {{--<i class="fa fa-check-square-o"></i>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}


                                </tbody>
                                {{--<tfoot>--}}
                                {{--<tr>--}}
                                    {{--<th>Name</th>--}}
                                    {{--<th>Email</th>--}}
                                    {{--<th>Mobile</th>--}}
                                    {{--<th>Report Status</th>--}}
                                    {{--<th>Report</th>--}}
                                {{--</tr>--}}
                                {{--</tfoot>--}}
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Custom and plugin javascript -->
    <script src="{!! asset('theme/js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset ('theme/js/inspinia.js') !!}"></script>
    <script src="{!! asset ('theme/js/plugins/dataTables/datatables.min.js') !!}"></script>


    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>


@endsection
