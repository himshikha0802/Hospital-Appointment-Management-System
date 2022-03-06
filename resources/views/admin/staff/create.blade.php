@extends('layout.admin.layout')
@section('content')
<section class="content-header">
    <h4> View detail
        <span><a href="{{route('staff.index')}}" class="btn btn-info">Click here</a></span></h4>
    <h1 style="text-align: center;">
      STAFF
    </h1>

  </section>
<section class="content");>
    <div class="row">
      <!-- left column -->
      <div class="col-md-12");>
        <!-- general form elements -->
        <div class="box box-primary");>
          <div class="box-header with-border">
            <h3 class="box-title">Staff</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('staff.store')}}" method="post"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NAME:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name Here...">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">AGE:</label>
                <textarea type="text" class="form-control" name="age" placeholder="Age Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">QUALIFICATION:</label>
                <textarea type="text" class="form-control" name="qualification" placeholder="Qualification Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">SALARY:</label>
                <textarea type="text" class="form-control" name="salary" placeholder="Salary Here..."></textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">ADDRESS:</label>
                <textarea  type="text" class="form-control" name="address" placeholder="Address Here..."></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">POST:</label>
                <textarea  type="text" class="form-control" name="post" placeholder="Post Here..."></textarea>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
  </section>
  @endsection
