<!DOCTYPE html>

<html lang="en">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@include('admin.include.head')

<body>



<style>

.pass

{

    width: 100%;

    height: 50px;

}



</style>



<div class="bg" style="width: 1349px; z-index: -999999; position: fixed;">

    <img src="{{asset('admin/assets/backgrounds/1.jpg')}} " style="position: inherit;width: 100%; height: 819.036px;z-index:-999999;">



<!-- Top content -->

        <div class="top-content">

            <div class="inner-bg">



                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 text">

                            <h1>Online Blood Donor Management System</h1>
                        </div>

                    </div>
                            @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                                {{ session()->get('message') }}

                            </div>

                            @endif
                    <div class="row">



                        <div class="col-md-6 col-md-offset-3 form-box">

                        	<div class="form-top">

                        		<div class="form-top-left">

                        			<h3>Admin Login</h3>

                        		</div>

                            </div>

                            <div class="form-bottom">


			                <form role="form" method="post" action="{{ route('login') }}">
                                @csrf

								<div class="form-group">

									<input type="text" placeholder="Enter email" class="pass form-control" required="The email is required"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>

								<div class="form-group">

									<input type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="pass form-control" required="The password is required">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>



			                        <button type="submit" id="login_check_submit_button" class="btn btn-info" style="height:50px !important; width:100%;"> Submit</button>

			                    </form>

		                    </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

</div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>

</html>
