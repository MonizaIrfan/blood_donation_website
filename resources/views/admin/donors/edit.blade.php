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
                    <h1 class="page-header">Donors Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-edit"></i> Edit Donor</span>
                            <a href="{{ route('Donor_list') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to donors</a>
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
                                <form role="form" method="post" action="{{ route('update_donor',$donar_registrations->donar_id) }}" enctype="multipart/form-data">
						        @csrf
                                    <input type="hidden" name="#" value="#" />
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Donor Name:</label>
                                        <input type="text" class="form-control" name="donar_name" value="{{$donar_registrations->donar_name}}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Gender:</label>
										<select name="gender" class="form-control">
                                            <option  value="{{$donar_registrations->gender}}">{{$donar_registrations->gender}}</option>
                                            @if($donar_registrations->gender=='MALE')
											<option value="FEMALE">FEMALE</option>
                                            @elseif($donar_registrations->gender=='FEMALE')
                                            <option value="MALE">MALE</option>
                                            @endif

                                         </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Blood Group:</label>

                                        <select name="blood_group" class="form-control">
                                            <option value="{{ $donar_registrations->blood_group }}" >{{  $donar_registrations->blood_group  }}</option>
                                            </option>
                                                <option value="AB+">AB+</option><option value="AB-">AB-</option><option value="O+">O+</option>
                                                <option value="O-">O-</option><option value="A+">A+</option><option value="A-">A-</option>
                                                <option value="B-">B-</option><option value="B+">B+</option>
                                            </select>

                                         </select>

                                    </div>

                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Email:</label>
                                        <input type="text" class="form-control" name="donar_email" value="{{$donar_registrations->donar_email}}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Age:</label>
                                        <input type="text" class="form-control" name="age" value="{{$donar_registrations->age}}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Phone:</label>
                                        <input type="text" class="form-control" name="mobile" value="{{$donar_registrations->mobile}}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Location:</label>
                                        <input type="text" class="form-control" name="location" value="{{$donar_registrations->location}}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                             <p class="help-block">
                                                <img src="{{ asset('images')}}/{{$donar_registrations->image}}" alt={{$donar_registrations->image}} style="width:25%;" />
                                             </p>
										<label class="control-label">Image:</label>
                                        <div class="row">
                                        <div class="col-md-10">
											 <input type="file" name="image">
                                             <p class="help-block"><span class="label label-warning">Max 2MB (jpg, gif, png)</span>&nbsp;</p>
                                         </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <button type="submit" class="btn btn-lg btn-success">Update Data</button>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4CoeJ-dMBGaqCKRb1oe0jbmz21LoOO5U
&libraries=places&callback=initAutocomplete"
        async defer></script>
<script>
function initAutocomplete()
{
	autocomplete = new google.maps.places.Autocomplete(
	(document.getElementById('address2')),
	{types: ['geocode']});

}
</script>
</body>
</html>
