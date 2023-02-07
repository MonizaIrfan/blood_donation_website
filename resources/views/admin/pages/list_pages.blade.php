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
                        <span class="title pull-left">Page Management</span>
                       <!--- <a href="{/{/// route('create_pages') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create Pages</a>-->
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
                                            <th width="10%">ID</th>
                                            <th width="15%">Title</th>
                                            <th width="55%">Content</th>
                                            <th width="13%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($page as $pages)
                                        <tr class="odd">
                                            <td>{{ $pages->id }}</td>
                                            <td><a target="_blank" href="{{ route('detail_pages',$pages->slug) }}">{{ $pages->slug }}</a></td>
                                             <!-- for read more description -->
                                            <td>
                                                <p class="text-muted fs-7 fw-bold">
                                                    <span class="content-main-one1">
                                                        {{ strip_tags(substr($pages->description,0,500)) }}
                                                    </span>
                                                    <span class="content-main-two1">
                                                        {{ strip_tags($pages->description) }}
                                                    </span>

                                                    @if( strlen($pages->description) > 500)
                                                    <a href='javascript:;' class="show_hide1">Read more
                                                    </a>
                                                    @endif
                                                </p>
                                            </td>                                            <td class="text-center">
                                            	<a class="btn btn-sm btn-primary" href="{{ route('edit_pages',$pages->id) }}"><i class="fa fa-edit"></i></a>
                                                <!--<a onClick="return confirm('Are you sure to delete this page?');" class="btn btn-sm btn-danger" href="<?php //echo admin_url('pages/delete/'.$o->id);?>"><i class="fa fa-trash"></i></a>-->
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
        // read More toggle
        $('.content-main-one1').show();
        $('.content-main-two1').hide();

        $('.show_hide1').on('click',function(){
            var txt = $.trim($(this).text());
            if(txt=='Read more')
            {
            $(this).closest('p').find('.content-main-one1').hide();
            $(this).closest('p').find('.content-main-two1').show();
            $(this).text('Read less');
            }
            else
            {
            $(this).closest('p').find('.content-main-one1').show();
            $(this).closest('p').find('.content-main-two1').hide();
            $(this).text('Read more');
            }
        });
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });

    </script>

</body>

</html>

