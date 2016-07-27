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
              <h3 class="box-title">Create Team Member</h3>
            </div>
          <form class="form-horizontal" enctype="multipart/form-data" action="{{ URL::to('team/create') }}"  method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name</label>

                  <div class="col-sm-4">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email</label>

                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="designation" class="col-sm-4 control-label">Designation</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="designation">
                  </div>
                </div>


                <div class="form-group">
                  <label for="fb" class="col-sm-4 control-label">Facebook</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="fb" name="fb" placeholder="fb">
                  </div>
                </div>


                <div class="form-group">
                  <label for="gl" class="col-sm-4 control-label">Google</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="gl" name="gl" placeholder="gl">
                  </div>
                </div>


                <div class="form-group">
                  <label for="tw" class="col-sm-4 control-label">tw</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="tw" name="tw" placeholder="tw">
                  </div>
                </div>


                <div class="form-group">
                  <label for="ln" class="col-sm-4 control-label">LinkInd</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="ln" name="ln" placeholder="ln">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Photo</label>

                  <div class="col-sm-4">
                   <span class="btn btn-primary btn-files" style="margin:0;">
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
