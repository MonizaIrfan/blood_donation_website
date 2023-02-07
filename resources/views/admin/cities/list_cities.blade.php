<!DOCTYPE html>
<html lang="en">

@include('admin.include.head')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.include.navbar')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 page-header">
                        <span class="title pull-left">City Management</span>
                        <a href="{{ route('create_cities') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create New</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
              {{ session()->get('message') }}
             </div>
             @endif

            <div class="row">
                <div class="col-lg-12">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="10%">ID</th>
                                            <th width="50%">Name</th>
                                            <th width="20%">Created</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $key='1';?>
                                        @foreach ( $cities as $city )
                                        <tr class="odd">
                                            <td>{{ $key++ }}</td>
                                            <td>{{$city->city_name}}</td>
                                            <td>{{$city->created_at }}</td>
                                            <td class="text-center">
                                                <a onClick="return confirm('Are you sure to delete this donor?')" class="btn btn-sm btn-danger" href="{{ route('delete_city',$city->id) }}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                         @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('admin.include.js')

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

