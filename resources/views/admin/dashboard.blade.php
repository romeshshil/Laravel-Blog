@extends('admin.layout.app')

@section('htmlheader_title')
    Home
@endsection

@section('contentheader_title')
    Dashboard Panel
@endsection


@section('main-content')
      <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$userCount}}</h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{URL::to('user/list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$postCount}}</h3>

              <p>Total Post</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{URL::to('blog/list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$teammemberCount}}</h3>

              <p>Total Team Member</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{URL::to('team/list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$userAdminstator}}</h3>

              <p>Total Adminstator</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">

        <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  @foreach($teamList as $team)
                    <li>
                      <img src="{{URL::to('upload/team/'.$team->photo)}}" height="87px" width="87px" alt="User Image">
                      <a class="users-list-name" href="#">{{$team->name}}</a>
                      <span class="users-list-date">{{$team->created_at->diffForHumans()}}</span>
                    </li>
                    @endforeach

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{URL::to('team/list')}}" class="uppercase">View All Member</a>
                </div>

                <!-- /.box-footer -->
              </div>

              <!--/.box -->
            </div>
        <div class="col-md-6">
                      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Posts</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">

              @foreach($bloglist as $blog)

                <li class="item">
                  <div class="product-img">
                    <img src="{{URL::to('upload/blog/'.$blog->photo)}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$blog->category->name}}
                      <span class="label label-warning pull-right">{{$blog->created_at->diffForHumans()}}</span></a>
                        <span class="product-description">
                          {{$blog->blog_title}}
                        </span>
                  </div>
                </li>
                @endforeach
                
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="{{URL::to('blog/list')}}" class="uppercase">View All Blogs</a>
            </div>
            <!-- /.box-footer -->
          </div>
            </div>

      </div>
      <!-- /.row (main row) -->

    </section>
@endsection
