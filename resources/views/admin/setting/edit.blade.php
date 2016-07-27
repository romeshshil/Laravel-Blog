@extends('admin.layout.app')

@section('htmlheader_title')
    Site Setting 
@endsection

@section('contentheader_title')
   Setting Panel
@endsection


@section('main-content')
      <section class="content">
      <div class="row">
         <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Website Setting Option</h3>
            </div>
            <!-- /.box-header -->
          <form class="form-horizontal"  action="{{ URL::to('update/'.$setting->id) }}"  enctype="multipart/form-data" method="post">

          <input type="hidden" name="_token" value="{{csrf_token()}}">
             <in
              <div class="box-body">

              <div class="col-md-6 setting-form">
               <h4 class="setting-header">Main-Informain</h4>
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Site Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="{{$setting->site_name}}" name="sitename" placeholder="site name" type="text">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Phone</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="{{$setting->phone}}" name="contactnumber" placeholder="contact number" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Contact Email</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="{{$setting->email}}" name="contactemail" placeholder="contact email" type="text">
                  </div>
                </div>

            </div>

                <div class="col-md-6 setting-form">
                <h4 class="setting-header">Office Time & Location</h4>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Office Time</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="{{$setting->office_time}}" name="officetime" placeholder="office time" type="text">
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Location</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="{{$setting->location}}"  name="location" placeholder="location" type="text">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Copyright</label>

                  <div class="col-sm-9">
                    <input class="form-control" value="{{$setting->copyright}}" id="inputEmail3" name="copyright" placeholder="copyright" type="text">
                  </div>
                </div>
            </div>


            <div class="col-md-6 setting-form">
            <h4 class="setting-header">Socail Icon</h4>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Facebook</label>

                  <div class="col-sm-9">
                    <input class="form-control" value="{{$setting->facebook}}" id="inputEmail3" name="facebook" placeholder="fblink" type="text">
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Twitter</label>

                  <div class="col-sm-9">
                    <input class="form-control" value="{{$setting->twitter}}" id="inputEmail3" name="twlink" placeholder="Twitter" type="text">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Google Plus</label>

                  <div class="col-sm-9">
                    <input class="form-control" value="{{$setting->google}}" id="inputEmail3" name="googlelink" placeholder="Google Plus" type="text">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Linkind</label>

                  <div class="col-sm-9">
                    <input class="form-control" value="{{$setting->linkind}}"  id="inputEmail3" name="linkind" placeholder="LinkInd" type="text">
                  </div>
                </div>
            </div>


        <div class="col-md-6 setting-form">
            <h4 class="setting-header">About</h4>
                             <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" name="aboutus" rows="3"  cols="10" placeholder="Enter ..." style="width:550px;"> {{$setting->aboutus}}</textarea>
                </div>



                <div class="form-group">
                  <label>Created By</label>
    
                    <input class="form-control" value="{{$setting->createdby}}"  id="inputEmail3" name="createdby" placeholder="creaedby" type="text">
                  </div>
                </div>

      <div class="col-md-6 setting-form">
              <h4 class="setting-header">Upload Website Logo</h4>
              <div class="col-sm-4 thumbnail">
                 <img src="{{ URL::to('/upload/logo/' . $setting->image) }}" alt="Cinque Terre" style="width:250px;height:150px">
              </div>
                 <div class="col-sm-6">
                   <span class="btn btn-primary btn-files">
                           Browse... <input type="file"  value="{{$setting->image}}" name="image">
                        </span>
                      </div>
            </div>

     

              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>

          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>
@endsection
