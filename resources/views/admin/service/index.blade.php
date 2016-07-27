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
              <h3 class="box-title">Service List</h3>
              <a href="{{URL::to('service/create')}}" class="btn btn-primary btn-md pull-right">Add Service</a>
            </div>
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20px">ID</th>
                   <th>Image</th>
                  <th>Name</th>
                  <th>short description</th>
                  <th style="width: 120px">Action</th>
                </tr>

         @foreach($service as $services)
                <tr>
             <td>{{$services->id}}</td>
                <td><img src="{{URL::to('upload/service/'.$services->image)}}" width="90"></td>
                 <td>{{$services->title}}</td>
                  <td>{{$services->desc}}</td>
                  <td style="padding-top:20px;">
                    <a href="{{URL::to('service/edit/'.$services->id)}}" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
           <a href="{{URL::to('service/delete/'.$services->id)}}" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
