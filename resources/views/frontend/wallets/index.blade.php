@extends('backend.layouts.master')

@section('title', 'Exchanges')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Wallet Submitted Name List</h1>
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
                    <th>Company Name</th>
                    <th>Website</th>
                  </tr>
                  </thead>
                  <tbody>
                  	 @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($wallets as $wallet)
                  <tr>
                  	<td>{{ ++$sl }}</td>
                    <td>{{$wallet->fname}}</td>
                     <td>{{$wallet->lname}}</td>
                     <td>{{$wallet->email}}</td>
                     <td>{{$wallet->company_name}}</td>
                     <td>{{$wallet->website}}</td>
                     

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