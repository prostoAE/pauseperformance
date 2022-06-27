@extends('app.layouts.app')

@section('header')
    @include('app.parts.header')
@endsection

@section('sidebar')
    @include('app.parts.sidebar')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-outline card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">All Plan view</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="{{asset('img/free-icon.svg')}}" style="width:65px;" class="img-thumbnail" alt="icon"></td>
                                                        <td>
                                                            <p class="m-0">Plan 1</p>
                                                            <p class="m-0">Jun 14, 2022 - Jun 22, 2022</p>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-edit text-green"></i></a>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-copy text-green"></i></a>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-trash text-green"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{asset('img/free-icon.svg')}}" style="width:65px;" class="img-thumbnail" alt="icon"></td>
                                                        <td>
                                                            <p class="m-0">Plan 2</p>
                                                            <p class="m-0">Jun 14, 2022 - Jun 22, 2022</p>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-edit text-green"></i></a>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-copy text-green"></i></a>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a href="#"><i class="fas fa-trash text-green"></i></a>
                                                        </td>
                                                    </tr>
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
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footer')
    @include('app.parts.footer')
@endsection
