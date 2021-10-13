@extends('master')
@section("content")


   
<div class="landingPage">
<img src="{{url('/images/one2.jpg')}}" alt="register" width="100%">
</div>


              <div class="container">
                <div class="heading text-center" style="padding-top: 100px;">
                    <b><h2>Register Your Support</h2></b>
                    <!-- <p class="text-left" style="color: red;">All fields are required</p> -->
                </div>

                <div class="register">
                @if(Session::has('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                      @php
                          Session::forget('success');
                      @endphp
                  </div>
                  @endif

                  @if(Session::has('warning'))
                  <div class="alert alert-danger">
                      {{ Session::get('warning') }}
                      @php
                          Session::forget('warning');
                      @endphp
                  </div>
                  @endif   
                  <form action="/register" method="post">

                      @csrf

                      <div class="row">

                        <div class="col-md-6" style="padding-right:30px;">
                        <div class="form-group">
                              <label>Surname:</label>
                              <input type="text" name="sname" class="form-control" placeholder="SurName">
                              @if ($errors->has('sname'))
                                  <span class="text-danger">{{ $errors->first('sname') }}</span>
                              @endif
                          </div>

                          <div class="form-group">
                              <label>First Name:</label>
                              <input type="text" name="fname" class="form-control" placeholder="First Name">
                              @if ($errors->has('fname'))
                                  <span class="text-danger">{{ $errors->first('fname') }}</span>
                              @endif
                          </div>

                          <div class="form-group">
                              <label for="gender" style="justify-content: left;">Gender</label>
                                  <select name="gender" style="width: 100%;  height:40px; background-color:white;">
                                  <option value="" selected="selected">- Select -</option>
                                  <option value="Female">Female</option>
                                  <option value="Male">Male</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                          </div>

                          <div class="form-group">
                              <label>Age:</label>
                              <input type="number" name="age" class="form-control" placeholder="age">
                              @if ($errors->has('age'))
                                  <span class="text-danger">{{ $errors->first('age') }}</span>
                              @endif
                          </div>


                          <div class="form-group">
                              <label>Phone Number:</label>
                              <input type="number" name="phoneNo" class="form-control" placeholder="phoneNo">
                              @if ($errors->has('phoneNo'))
                                  <span class="text-danger">{{ $errors->first('phoneNo') }}</span>
                              @endif
                          </div>

                          <div class="form-group">
                              <label>Email:</label>
                              <input type="text" name="email" class="form-control" placeholder="Email">
                              @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                          </div>
                          

                        

                        </div>

                        <div class="col-md-6" style="padding-left: 30px;">                      
                        
                          <div class="form-group">

                              <label for="state" style="justify-content: left;">State of Origin</label>
                                <select name="state" style="width: 100%; height:40px; background-color:white;">
                                <option value="" selected="selected">- Select -</option>
                                <option value="Outside Nigeria">Outside Nigeria</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nassarawa">Nassarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="Abuja FCT">FCT Abuja</option>
                                </select>

                                @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                                </div>


                              <div class="form-group">
                                    <label>L.G.A:</label>
                                    <input type="text" name="lga" class="form-control" placeholder="lga">
                                    @if ($errors->has('lga'))
                                        <span class="text-danger">{{ $errors->first('lga') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">

                                    <label for="state2" style="justify-content: left;">State of Residential Address</label>
                                      <select name="state2" style="width: 100%; height:40px; background-color:white;">
                                      <option value="" selected="selected">- Select -</option>
                                      <option value="Outside Nigeria">Outside Nigeria</option>
                                      <option value="Abia">Abia</option>
                                      <option value="Adamawa">Adamawa</option>
                                      <option value="Akwa Ibom">Akwa Ibom</option>
                                      <option value="Anambra">Anambra</option>
                                      <option value="Bauchi">Bauchi</option>
                                      <option value="Bayelsa">Bayelsa</option>
                                      <option value="Benue">Benue</option>
                                      <option value="Borno">Borno</option>
                                      <option value="Cross River">Cross River</option>
                                      <option value="Delta">Delta</option>
                                      <option value="Ebonyi">Ebonyi</option>
                                      <option value="Edo">Edo</option>
                                      <option value="Ekiti">Ekiti</option>
                                      <option value="Enugu">Enugu</option>
                                      <option value="Gombe">Gombe</option>
                                      <option value="Imo">Imo</option>
                                      <option value="Jigawa">Jigawa</option>
                                      <option value="Kaduna">Kaduna</option>
                                      <option value="Kano">Kano</option>
                                      <option value="Katsina">Katsina</option>
                                      <option value="Kebbi">Kebbi</option>
                                      <option value="Kogi">Kogi</option>
                                      <option value="Kwara">Kwara</option>
                                      <option value="Lagos">Lagos</option>
                                      <option value="Nassarawa">Nassarawa</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Ogun">Ogun</option>
                                      <option value="Ondo">Ondo</option>
                                      <option value="Osun">Osun</option>
                                      <option value="Oyo">Oyo</option>
                                      <option value="Plateau">Plateau</option>
                                      <option value="Rivers">Rivers</option>
                                      <option value="Sokoto">Sokoto</option>
                                      <option value="Taraba">Taraba</option>
                                      <option value="Yobe">Yobe</option>
                                      <option value="Zamfara">Zamfara</option>
                                      <option value="Abuja FCT">FCT Abuja</option>
                                      </select>

                                      @if ($errors->has('state2'))
                                          <span class="text-danger">{{ $errors->first('state2') }}</span>
                                      @endif
                                      </div>



                                <div class="form-group">
                                    <label>L.G.A. of Residential Address</label>
                                    <input type="text" name="lra" class="form-control" placeholder="L.G.A">
                                    @if ($errors->has('lra'))
                                        <span class="text-danger">{{ $errors->first('lra') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Polling Unit</label>
                                    <input type="text" name="pu" class="form-control" placeholder="polling unit">
                                    @if ($errors->has('pu'))
                                        <span class="text-danger">{{ $errors->first('pu') }}</span>
                                    @endif
                                </div>
                        </div>

                      </div><br/></br>

                          
                          
                        <button type="submit" class="btn btn-secondary" style="width: 100%;">Register</button><br/><br/>

                    </form> 
                </div>
              </div>



@endsection