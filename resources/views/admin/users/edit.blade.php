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
              <h3 class="box-title">Create User</h3>
            </div>
          <form class="form-horizontal" action="{{ URL::to('user/update/'. $admin->id) }}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name</label>

                  <div class="col-sm-4">
                    <input type="text" name="name" class="form-control" value="{{$admin->name}}" id="name" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email</label>

                  <div class="col-sm-4">
                    <input type="email" value="{{$admin->email}}" class="form-control" id="email" name="email" placeholder="email">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="uname" class="col-sm-4 control-label">User Name</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="uname" value="{{$admin->uname}}" name="uname" placeholder="uname">
                  </div>
                </div>

               <div class="form-group">
                  <label for="uname" class="col-sm-4 control-label">User Type</label>

                  <div class="col-sm-4">
                    <select  class="form-control"  name="user_type" id="sel2">
                          <option value="1">Admistartor</option>
                             <option value="2">Member</option>
                            <option value="3">Author</option>
                            <option value="4">Subscirber</option>
                            <option value="5">Editor</option>
                        </select>
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
