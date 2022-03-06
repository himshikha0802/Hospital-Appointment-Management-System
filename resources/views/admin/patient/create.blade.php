@extends('layout.admin.layout')
@section('content')
<section class="content-header">
    <h1>
        Patient
    </h1>

  </section>
<section class="content">

    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Patient</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('patient.store')}}" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="PhoneNumber">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="age" placeholder="Age">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Feedback</label>
                <textarea class="form-control" name="feedback"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              {{csrf_field()}}
            </form>
          </div>
          </div>
        </div>
    </section>
    @endsection
