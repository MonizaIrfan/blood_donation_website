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
                        <span class="title pull-left">Donor Contact Management</span>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="8%">Id</th>
                                    <th width="8%">Name</th>
                                    <th width="8%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th width="10%">Address</th>
                                    <th width="15%">Message</th>
                                    <th width="15%">Delete message</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $key='1';?>
                                @foreach ($contact_us as $contact)

                                <tr class="odd">
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $contact->name}}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td class="text-center">
                                       <a onClick="return confirm('Are you sure to delete this donor?')" class="btn btn-sm btn-danger" href="{{ route('delete_contact_us',$contact->id) }}"><i class="fa fa-trash"></i></a>
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
