@extends('admin.master')
@section('edit')
<div class="row">
                @if($users !==null)
                    @foreach ($users as $users)

                    @endforeach
                  @endif
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit User </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="col-sm-2">
                      <img src="{{ asset('uploads/Profile/'.$users->photo) }}" alt="placeholder+image" class="img-edit" style="width: 150px; height: 200px;">
                  </div>
                    <div class="col-sm-9" class="second-dev" style="margin-left: -70px;">
                  <div class="x_content">
                    @if (Session::has('message'))
                      <div class="alert alert-success">
                      {{ Session::get('message') }}
                  </div>
                    @endif

                    <br />

                    <form method="POST" action="{{ url('admin/users/update/'.$users->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                       @csrf
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" placeholder="{{ $users->name }}">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                            Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="mail" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="{{ $users->email }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                            Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="passwod" name="password" required="required" class="form-control col-md-7 col-xs-12" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{-- <input id="role" class="form-control col-md-7 col-xs-12" type="text" name="role"> --}}
                          <select class="form-control col-md-7 col-xs-12" name="role" required="required" >
                              <option>Select Role</option>
                              <option value="Adminstrator">Admin</option>
                              <option value="Author">Author</option>
                              <option value="subscriber">Subscriber</option>
                          </select>
                        </div>
                      </div>
                     {{--  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div> --}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                         <select class="date-picker form-control col-md-7 col-xs-12" required="required" name="status">
                             <option>Select Status</option>
                             <option value="1">Active</option>
                             <option value="0">Not Active</option>
                         </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Picture">
                            Upload Pictutre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" name="cimage" required="required" class="form-control col-md-7 col-xs-12" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Picture">
                            Joining Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class='input-group date' id='myDatepicker'>
                          <input type="date" required="required" class="form-control col-md-7 col-xs-12" placeholder="{{ $users->created_at }}" name="date">
                          <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>

                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
              </div>
                </div>
              </div>
            </div>

    @endsection
