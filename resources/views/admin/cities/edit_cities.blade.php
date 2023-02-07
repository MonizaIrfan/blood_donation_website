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
                    <h1 class="page-header">City Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
              {{ session()->get('message') }}
             </div>
             @endif


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-edit"></i> Edit Item</span>
                            <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to items</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">City Name:</label>
                                        <input type="text" class="form-control" name="city_name" value="#">
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

