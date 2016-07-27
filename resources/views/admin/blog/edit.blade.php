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
              <h3 class="box-title">Edit BLog</h3>
            </div>
          <form class="form-horizontal" enctype="multipart/form-data" action="{{ URL::to('blog/update/'. $blogs->id) }}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Blog Title</label>

                  <div class="col-sm-4">
                    <input type="text" name="blog_title" class="form-control" value="{{$blogs->blog_title}}" id="name" placeholder="name">
                  </div>
                </div>


               <div class="form-group">
                  <label for="uname" class="col-sm-4 control-label">User Type</label>

                  <div class="col-sm-4">
                    <select  class="form-control"  name="category_name" id="sel2">{{$self->processCatlistOptions($categorylist,$blogs->category_id)}} </select>
                  </div>
                </div>

                <div class="form-group">
                    <label for="desct" class="col-sm-4 control-label">Short Desc.</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" name="desc" rows="3"  cols="" placeholder="Enter ..." style="width:480px;"> {{$blogs->desc}}</textarea>
                    </div>
                  </div>

                
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Blog Image</label>
                      <div class="col-sm-2 thumbnail">
                           <img src="{{ URL::to('/upload/blog/' . $blogs->photo) }}" alt="Cinque Terre" style="width:250px;height:150px">
                        </div>
                  <div class="col-sm-4">
                   <span class="btn btn-primary btn-files">
                           Browse... <input type="file"  name="photo">
                        </span>
                      </div>
                  </div>

     

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form> 
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       </div>
    </section>
@endsection
