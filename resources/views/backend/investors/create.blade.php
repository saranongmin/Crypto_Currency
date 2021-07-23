@extends('backend.layouts.master')

@section('title', 'Investor')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Investors List </h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
<!--                 <h3 class="card-title">Quick Example</h3>
 -->              </div>
              <!-- /.card-header -->
              <!-- form start -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(['route'=> 'investors.store','files'=>true]) }}
                            <div class="card-body">

                @include('backend.investors.form')

               {{ Form::button('Submit Form', [
                    'class' => 'btn btn-primary',
                    'type' => 'submit',
                ]) }}

</div>
            {{ Form::close() }}
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection