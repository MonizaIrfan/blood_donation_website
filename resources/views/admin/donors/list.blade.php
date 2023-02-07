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
                        <span class="title pull-left">Donors Management</span>
                        <a href="{{ route('Donor_create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create New Donor</a>
                    </div>
                </div>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
              {{ session()->get('message') }}
             </div>
             @endif
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="15%">Donor Name</th>
                                    <th width="10%">Mobile</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Gender</th>
                                    <th width="5%">age</th>
                                    <th width="8%">blood_group</th>
                                    <th width="10%">location</th>
                                    <th width="8%">Created_at</th>
                                    <th width="8%">Updated_at</th>
                                    <th width="8%">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donar_registrations as $donar_registration )
                                <tr class="odd">
                                    <td>{{ $donar_registration->donar_name }}</td>
                                    <td>{{ $donar_registration->mobile }}</td>
                                    <td>{{ $donar_registration->donar_email }}</td>
                                    <td>{{ $donar_registration->gender }}</td>
                                    <td>{{ $donar_registration->age }}</td>
                                    <td>{{ $donar_registration->blood_group }}</td>
                                    <td>{{ $donar_registration->location }}</td>
                                    <td>{{ $donar_registration->created_at }}</td>
                                    <td>{{ $donar_registration->updated_at }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary" href="{{ route('Donor_edit',$donar_registration->donar_id) }}"><i class="fa fa-edit"></i></a>
                                        <a onClick="return confirm('Are you sure to delete this donor?')" class="btn btn-sm btn-danger" href="{{ route('delete_donar',$donar_registration->donar_id) }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach



    </div>
                </div>
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
