@extends('admin.master')
@section('content')
<div class="row">
                @if($post !==null)
                    @foreach ($post as $posts)

                    @endforeach
                  @endif

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Post </h2>
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
                      <img src="{{ asset('uploads/Profile/'.$posts->photo) }}" alt="placeholder+image" class="img-edit" style="width: 150px; height: 160px;">
                  </div>
                    <div class="col-sm-9" class="second-dev" style="margin-left: -70px;">
                  <div class="x_content">

                    @if (Session::has('message'))
                      <div class="alert alert-success">
                      {{ Session::get('message') }}
                  </div>
                    @endif

                    <br />
                    <form method="POST" action="{{ url('admin/posts/update/'.$posts->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value="{{ $posts->title }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                            Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{-- <input type="mail" id="body" name="body" required="required" class="form-control col-md-7 col-xs-12"> --}}
                          <textarea name="body" required="required" class="form-control col-md-7 col-xs-12">{{ $posts->body }}</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Picture">
                            Upload Pictutre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" name="cimage" required="required" class="form-control col-md-7 col-xs-12">
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