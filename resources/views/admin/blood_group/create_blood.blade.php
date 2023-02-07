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
                <div class="col-lg-12">
                    <h1 class="page-header">Blood Groups Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-plus"></i> Create New Blood Group</span>
                            <a href="{{ route('list_blood') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to blood groups</a>
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                          {{ session()->get('message') }}
                         </div>
                         @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                                <form role="form" method="post" action="{{ route('create_blood_group') }}" enctype="multipart/form-data">
						        @csrf
                                    <input type="hidden" name="#" value="#" />
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Blood Group:</label>
                                        <input type="text" class="form-control" name="bg_name" value="" placeholder="Enter Blood Group Name" required>
                                    </div>
                                </div>

								<div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <button type="submit" class="btn btn-lg btn-success">Submit Data</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('admin.include.js')

</body>
</html>
