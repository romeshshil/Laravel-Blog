@extends('admin.layout.app')

@section('htmlheader_title')
    User List
@endsection


@section('main-content')
      <section class="content">
      <div class="row">
         <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">User List</h3>
              <a href="{{URL::to('user/create')}}" class="btn btn-primary btn-md pull-right">Add Users</a>
            </div>
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20px">ID</th>
                  <th>Name</th>
                  <th>Eamil</th>
                  <th>User Name</th>
                  <th>User Type</th>
                  <th style="width: 200px">Action</th>
                </tr>

         @foreach($admin as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->uname}}</td>
                  <td>
                @if($user->user_type==1) Admistatror
                  @elseif($user->user_type==2) Member
                   @elseif($user->user_type==3) Author
                    @elseif($user->user_type==4) Subsciber

               @endif                 

                  </td>
                  <td>
                    <a href="{{URL::to('user/edit/'.$user->id)}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
           <a href="{{URL::to('user/delete/'.$user->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>

          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>
@endsection
