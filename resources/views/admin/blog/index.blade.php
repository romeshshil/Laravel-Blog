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
              <h3 class="box-title">BLog List</h3>
              <a href="{{URL::to('blog/create')}}" class="btn btn-primary btn-md pull-right">Add Blog</a>
            </div>
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Image</th>
                  <th  style="width: 120px">Title</th>
                  <th>Category</th>
                  <th>Desctiption</th>
                   <th>Post By</th>
                    <th>Publish Date</th>
                  <th style="width: 70px">Action</th>
                </tr>

         @foreach($blog as $blogs)
                <tr>
                  <td>{{$blogs->id}}</td>
                  <td><img src="{{URL::to('upload/blog/'.$blogs->photo)}}" width="90"></td>
                  <td>{{$blogs->blog_title}}</td>
                  <td>{{$blogs->category->name}}</td>
                  <td>{{$blogs->desc}}</td>
                   <td>{{$blogs->user->name}}</td>
                   <td>date</td>
                     <td>
                    <a href="{{URL::to('blog/edit/'.$blogs->id)}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
           <a href="{{URL::to('blog/delete/'.$blogs->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
