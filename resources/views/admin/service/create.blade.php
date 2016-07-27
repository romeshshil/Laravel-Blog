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
              <h3 class="box-title">Creat Sevice</h3>
            </div>
          <form class="form-horizontal" action="{{ URL::to('service/create') }}" enctype="multipart/form-data" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Title</label>

                  <div class="col-sm-5">
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="desct" class="col-sm-4 control-label">Short Desc.</label>
                  <div class="col-sm-5">
                    <textarea class="form-control" name="desc" rows="3"  cols="" placeholder="Enter ..." style="width:480px;"> </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Serice Image</label>

                  <div class="col-sm-4">
                   <span class="btn btn-primary btn-files" style="margin:0;">
                           Browse... <input type="file"  name="image">
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
