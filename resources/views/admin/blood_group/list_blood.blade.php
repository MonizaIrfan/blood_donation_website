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
                        <span class="title pull-left">Blood Groups Management</span>
                        <a href=" {{ route('create_blood') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create New </a>
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
                                    <th width="8%">ID</th>
                                    <th width="15%">Blood Groups</th>
                                    <th width="10%">Created</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $key='1';?>
                                @foreach ($blood_groups as $blood_group)

                                <tr class="odd">
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $blood_group->bg_name }}</td>
                                    <td>{{ $blood_group->created_at }}</td>
                                    <td class="text-center">
                                        <a onClick="return confirm('Are you sure to delete this donor?')" class="btn btn-sm btn-danger" href="{{ route('delete_blood_group',$blood_group->bg_id) }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
