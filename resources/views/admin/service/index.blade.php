@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Services</h3>
            <a href="{{route('service.create')}}" class="btn btn-primary">New Service</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Service Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($services as $i=>$service)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$service['title']}}</td>
                    <td>{{$service['description']}}</td>
                    <td> <img src="{{$service->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>
                    <td><a href="{{route('service.delete',$service['id'])}}">Delete</a></td>
                    <td><a href="{{route('service.edit',$service['id'])}}">Edit</a></td>
                  </tr>
              @endforeach

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

  </section>
@endsection
