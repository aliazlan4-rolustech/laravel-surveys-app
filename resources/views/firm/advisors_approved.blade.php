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
                                    <th>Position</th>
                                    <th>Tokens Used</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($advisors as $advisor)
                                    <tr>
                                        <td>{{ $advisor["name"] }}</td>
                                        <td>{{ $advisor["email"] }}</td>
                                        <td>{{ $advisor["mobile_number"] }}</td>
                                        <td>{{ $advisor["company_position"] }}</td>
                                        <td><a href="/reports/view?advisor={{ $advisor['id'] }}">{{ $advisor["total_reports"] }}</a></td>
                                        <td>Active</td>
                                        <td> <a href="{{route('adviser-edit', ['id' => $advisor['id']])}}" class="btn btn-white btn-bitbucket">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            {{--<a class="btn btn-white btn-bitbucket">--}}
                                                {{--<i class="fa fa-ban"></i>--}}
                                            {{--</a>--}}
                                            <a class="btn btn-white btn-bitbucket" onclick="deleteAdvisor({{ $advisor["id"] }}, '{{ $advisor["name"] }}')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                    </tr>
                                @endforeach


                                </tbody>
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
    $(function () {
        $('#advisors_approved').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    function deleteAdvisor(id, name){
        if (confirm('Are you sure you want to delete adviser ' + name + '?')) {
            window.location = "/advisors/delete/"+id;
        }
    }
</script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Approved Financial Advisers'},

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
