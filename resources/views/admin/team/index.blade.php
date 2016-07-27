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
              <h3 class="box-title">Team List</h3>
              <a href="{{URL::to('team/create')}}" class="btn btn-primary btn-md pull-right">Add Team</a>
            </div>
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20px">ID</th>
                  <th style="width: 90px">Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Designation</th>
                  <th style="width: 90px">Action</th>
                </tr>

         @foreach($teams as $team)
                <tr>
                  <td>{{$team->id}}</td>
                  <td><img src="{{URL::to('upload/team/'.$team->photo)}}" width="90" height="70"></td>
                  <td>{{$team->name}}</td>
                  <td>{{$team->email}}</td>
                  <td>{{$team->designation}}</td>
                           <td>
                    <a href="{{URL::to('team/edit/'.$team->id)}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
           <a href="{{URL::to('team/delete/'.$team->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
