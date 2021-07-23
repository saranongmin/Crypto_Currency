@extends('backend.layouts.master')

@section('title', 'Exchanges')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Exchange Submitted Name List</h1>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Exchange Name</th>
                    <th>Website</th>
                  </tr>
                  </thead>
                  <tbody>
                  	 @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($exchanges as $exchange)
                  <tr>
                  	<td>{{ ++$sl }}</td>
                    <td>{{$exchange->fname}}</td>
                     <td>{{$exchange->lname}}</td>
                     <td>{{$exchange->email}}</td>
                     <td>{{$exchange->exchange_name}}</td>
                     <td>{{$exchange->website}}</td>
                     

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