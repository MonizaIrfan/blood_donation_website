
@include('frontend.layouts.header')
<br><br><br><br><br><br>
        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                              <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold"><span>Become </span>a Donor</h2>
                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">
                    <!--Start Featured Item Col-->
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                          {{ session()->get('message') }}
                         </div>
                         @endif
                         @if (count($errors) > 0)
                         <div class="alert alert-danger">
                             <strong>Whoops!</strong> There were some problems with your input.
                                                      The image of your you add should be width:500 and height:500
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif

                      <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="name" class="control-label">Name <span style="color: #E50000;">*</span></label>
                            <input name="donar_name" id="name" class="form-control" type="text" >
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="img" class="control-label">Picture <span style="color: #E50000;">*</span></label>
                            <input name="image" id="image" class="form-control" type="file" >
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="age" class="control-label">Age <span style="color: #E50000;">*</span></label>
                            <input name="age" id="age" class="form-control" type="number">
                          </div>
                        </div>
                        <div class="col-md-6 col-md-offset-0">
                            <div class="form-group">
                              <label for="email" class="control-label">Email<span style="color: #E50000;">*</span></label>
                              <input name="donar_email" id="email" class="form-control" type="email" >
                            </div>
                          </div>
                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="mobile" class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                            <input name="mobile" id="mobile" class="form-control" type="text" >
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="location" class="control-label">City <span style="color: #E50000;">*</span></label>
                            <input name="location" id="location" class="form-control" type="text" >
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label for="gender" class="control-label">Gender<span style="color: #E50000;">*</span></label>
                            <select name="gender" id="gender" class="form-control" required="" >
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="blood_group" class="control-label">Blood Group <span style="color: #E50000;">*</span></label>
                            <select name="blood_group" id="blood_group" class="form-control" required="">
                                <option value="AB+">AB+</option><option value="AB-">AB-</option><option value="O+">O+</option>
                                <option value="O-">O-</option><option value="A+">A+</option><option value="A-">A-</option>
                                <option value="B-">B-</option><option value="B+">B+</option>
                            </select>
                            </select>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <button onclick="return confirm('Are you sure the provide infromation is correct?')"  type="submit" class="btn btn-block btn-primary cont-frm-btn">Register</button>
                          </div>
                        </div>
                      </form>

                    </div>
                    <!--End Featured Item Col-->
                </div>
                <!--End Featured Row-->
            </div>
            <!--End Featured container-->
        </section>
        <!--End Featured section-->
        @include('frontend.layouts.footer')


