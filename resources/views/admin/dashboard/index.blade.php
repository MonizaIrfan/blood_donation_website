<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')
<body>
    <div id="wrapper">

        @include('admin.include.navbar')

        <div id="page-wrapper">


            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <div class="col-md-12">

                <div class="col-md-6">
                	<h1 class="lead">Blood Donors:</h1>
                    <div class="well well-white">
                    <table class="table">

					<tr>
						<td><label>ID</label></td>
						<td><label>Name</label></td>
						<td><label>Age</label></td>
						<td><label>Gender</label></td>
                        <td><label>Cities</label></td>
                        <td><label>Blood Group</label></td>


					</tr>
                    <?php $key='1';?>
                    @foreach ( $latest as $latests)
                    <tr>
                    <td><label>{{ $key++ }}</label></td>
                    <td><label>{{ $latests->donar_name }}</label></td>
                    <td><label>{{ $latests->age }}</label></td>
                    <td><label>{{ $latests->gender }}</label></td>
                    <td><label>{{ $latests->location }}</label></td>
                    <td><label>{{$latests->blood_group }}</label></td>

                </tr>
                @endforeach



                    </table>
                    </div>
                </div>

				<div class="col-md-6">
                	<h1 class="lead">Blood Groups:</h1>
                    <div class="well well-white">
                    <table class="table">
					<tr>

						<td><label>ID</label></td>
						<td><label>Blood Group</label></td>
						<td><label>Created</label></td>
					</tr>
                    <?php $key='1';?>
                    @foreach($blood_groups as $blood_group)
                    <tr>

                            <td><label>{{ $key++ }}</label></td>
                            <td><label>{{ $blood_group->bg_name }}</label></td>
                            <td><label>{{ $blood_group->created_at }}</label></td>
                        </tr>
                        @endforeach

                    </table>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </div>
    @include('admin.include.js')
</body>
</html>
