@extends('layout.admin.layout')
@section('content')
<section class="content-header">
    <h1>
      Doctor
    </h1>

  </section>
<section class="content">

    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Doctor</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
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
                <label for="exampleInputEmail1">PhoneNumber</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="PhoneNumber">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3">Specialist</label>
                <div class="col-sm-9">
                  <select class="form-control mb-3" name="specialist_id">
                    <option value="" selected disabled>
                      --Select Doctor Specialist--
                    </option>
                     @if($specialists)
                    @foreach ($specialists as $specialist)
                    <option value="{{$specialist['id']}}">{{$specialist['SpecialistType']}}</option>
                    @endforeach
                     @endif
                  </select>
                </div>
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
