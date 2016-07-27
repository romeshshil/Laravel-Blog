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
              <h3 class="box-title">Category Update</h3>
            </div>
          <form class="form-horizontal" action="{{ URL::to('category/update/'. $category->id) }}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name</label>

                  <div class="col-sm-4">
                    <input type="text" name="name" class="form-control" value="{{$category->name}}" id="name" placeholder="name">
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
