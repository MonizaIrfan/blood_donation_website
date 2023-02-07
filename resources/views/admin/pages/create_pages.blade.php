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
                    <h1 class="page-header">Page content</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-plus"></i> Create New Page</span>
                            <a href="{{ Route('list_pages') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to pages</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form role="form" method="POST" action="#" enctype="multipart/form-data">
						            @csrf
                                    <input type="hidden" name="#" value="#" />
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label class="control-label">Page URL:</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><span class="text-info">http://127.0.0.1:8000/pages</span></div>
                                        <input type="text" class="form-control" name="slug" value="">
                                        </div>
                                        <p class="help-block">Must not contains space and dash. You can use alphanumeric, underscore. (Valid: page1, my_page, page)</p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label class="control-label">Title:</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label class="control-label">Content:</label>
                                        <textarea class="form-control" name="description" rows="8"></textarea>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label" style="margin-right:10px;">Status:</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="status" checked> Active
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="0" name="status"> Inactive
                                        </label>
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

