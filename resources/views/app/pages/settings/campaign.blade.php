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
                        <h1>Campaign Setting</h1>
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
                    <div class="col-sm-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="list-product">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title m-0">Campaign list</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Name</th>
                                                <th style="width: 40px">
                                                    <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#add-product">
                                                        <i class="fas fa-plus text-success"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Campaign 1</td>
                                                <td>
                                                    <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#edit-product">
                                                        <i class="fas fa-edit text-warning"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Campaign 2</td>
                                                <td>
                                                    <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#edit-product">
                                                        <i class="fas fa-edit text-warning"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

@section('modals')
    @include('app.includes.modals.add_product')
    @include('app.includes.modals.edit_product')
@endsection
