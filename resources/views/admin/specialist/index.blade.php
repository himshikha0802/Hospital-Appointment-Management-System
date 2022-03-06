@extends('layout.admin.layout')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Specialists</h3>
            <a href="{{route('specialist.create')}}" class="btn btn-primary">New Specialist</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                <th style="width: 10px">#</th>
                <th>SpecialistType</th>
                <th>description</th>
                <th>Status</th>
                <th>Total Doctors</th>
                <th style="width: 40px">Action</th>
              </tr>
              @foreach ($specialists as $i=>$specialist)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$specialist['SpecialistType']}}</td>
                    <td>{{$specialist['description']}}</td>
                    <td>{{$specialist['is_active']}}</td>
                    <td>{{$specialist->doctors->count()}}</td>
                    <td><a href="{{route('specialist.delete',$specialist['id'])}}">Delete</a></td>
                    <td><a href="{{route('specialist.edit',$specialist['id'])}}">Edit</a></td>
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
