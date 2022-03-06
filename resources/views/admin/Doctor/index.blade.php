@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Doctors</h3>
            <a href="{{route('doctor.create')}}" class="btn btn-primary">New Doctor</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Doctor Id</th>
                <th>Name</th>
                <th>description</th>
                <th>PhoneNumber</th>
                <th>Image</th>
                <th>Doctor's Specialist</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($doctors as $i=>$doctor)
              {{-- @dd($doctor->image_path) --}}
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$doctor['Name']}}</td>
                    <td>{{$doctor['description']}}</td>
                    <td>{{$doctor['PhoneNumber']}}</td>
                    <td> <img src="{{$doctor->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>
                    <td>{{$doctor->specialist->SpecialistType}}</td>
                    <td><a href="{{route('doctor.delete',$doctor['id'])}}">Delete</a></td>
                    <td><a href="{{route('doctor.edit',$doctor['id'])}}">Edit</a></td>
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
