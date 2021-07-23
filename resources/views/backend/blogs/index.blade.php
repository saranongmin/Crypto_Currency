@extends('backend.layouts.master')

@section('title', 'Products')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Investor List Room</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#SL</th>
                    <th>Investor Name</th>
                    <th>Profile Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  	 @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($investors as $investor)
                  <tr>
                  	<td>{{ ++$sl }}</td>
                    <td>{{$investor->title}}</td>
                      <td>
                        @if(file_exists(storage_path().'/app/public/investors/'.$investor->image ) && (!is_null($investor->image)))
                                <img src="{{ asset('storage/investors/'.$investor->image) }}" height="100">
                            @else
                                <img src="{{ asset('/default-avatar.png') }}">
                            @endif
                          </td>
                    

                  </tr>
                  
                                   @endforeach

                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection