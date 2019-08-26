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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Joining Date</th>
                        </tr>
                      </thead>
                      <tbody>

                @if($users !==null)

                    @foreach ($users as $users)
                        <tr>
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
                          <td>{{ $users->created_at->format('d/m/Y') }}</td>
                        </tr>
                     @endforeach
                @endif

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection