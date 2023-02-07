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
                    <h1 class="page-header">Global Setting</h1>
                </div>
            </div>

            <?php $this->load->view('admin/include/alert');?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <form role="form" method="post" action="" enctype="multipart/form-data">
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="control-label">Website Name:</label>
                                <input class="form-control" type="text" value="<?php echo $setting['site_title'];?>" name="site_title" disabled="disabled">
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="control-label">Facebook:</label>
                                <input class="form-control" type="text" value="<?php echo $setting['site_facebook'];?>" name="site_facebook">
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="control-label">Twitter:</label>
                                <input class="form-control" type="text" value="<?php echo $setting['site_twitter'];?>" name="site_twitter">
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="control-label">Linkedin:</label>
                                <input class="form-control" type="text" value="<?php echo $setting['site_linkedin'];?>" name="site_linkedin">
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="control-label">Instagram:</label>
                                <input class="form-control" type="text" value="<?php echo $setting['site_instagram'];?>" name="site_instagram">
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-6 col-md-offset-1">
                                <button type="submit" class="btn btn-lg btn-success">Submit Data</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <p>&nbsp;</p>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('admin.include.js')

</body>
</html>

