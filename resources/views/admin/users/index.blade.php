@extends('admin.master')
@section('content')
<div class="x_title">
                    <h2>Users Record <small>All Users</small></h2>
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
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Joining Date</th>
                          <th>Photo</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                @if($users !==null)

                    @foreach ($users as $users)
                        <tr>
                          <td>{{ $users->id }}</td>
                          <td>{{ $users->name }}</td>
                          <td>{{ $users->email }}</td>
                          <td>{{ $users->role->name }}</td>

                @if($users->is_active == '1')

                        <?php
                           $userIsActive = "Active";
                        ?>

                          <td>{{ $userIsActive }}</td>

                    @else
                        <?php
                           $userNActive = "Not Active";
                        ?>


                          <td>{{ $userNActive }}</td>
                  @endif
                  @if($users->created_at !==null)
                          <td>{{ $users->created_at->format('d/m/Y') }}</td>
                  @else
                        <td>{{ date("d/m/Y") }}</td>
                    @endif
                    <td> <img height="50" width="60" src="{{ asset('uploads/Profile/'.$users->photo) }}"></td>
                        <td>
                            <a href="{{ url('admin/users/'.$users->id.'/edit') }}" class="btn btn-primary a-btn-slide-text">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true" style="color: white"></span>
                            </a>
                            <button type="button" class="btn btn-primary a-btn-slide-text" data-toggle="modal" data-target="#myModal" >
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </button>
                            <a href="{{ url('admin/users/delete/'.$users->id) }}" class="btn btn-danger a-btn-slide-text">
                               <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </td>
                        <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Users Information</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <h4>Sorry You Don't Have Permissions to View Details</h4>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>
                        </tr>
                     @endforeach
                @endif

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection