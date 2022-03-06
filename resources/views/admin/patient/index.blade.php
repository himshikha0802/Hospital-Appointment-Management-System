@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Patients</h3>
            <a href="{{route('patient.create')}}" class="btn btn-primary">New Patient</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                {{-- <th style="width: 10px">Specialist Id</th> --}}
                <th>Patient Id</th>
                <th>Name</th>
                <th>description</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Address</th>
                <th>Age</th>
                <th>Feedback</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($patients as $i=>$patient)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$patient['name']}}</td>
                    <td>{{$patient['description']}}</td>
                    <td>{{$patient['contact']}}</td>
                    <td> <img src="{{$patient->image_path}}" style="width: 70px; height: 70px;" class="img-circle" alt=""></td>
                    <td>{{$patient['address']}}</td>
                    <td>{{$patient['age']}}</td>
                    <td>{{$patient['feedback']}}</td>
                    <td><a href="{{route('patient.delete',$patient['id'])}}">Delete</a></td>
                    <td><a href="{{route('patient.edit',$patient['id'])}}">Edit</a></td>
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
