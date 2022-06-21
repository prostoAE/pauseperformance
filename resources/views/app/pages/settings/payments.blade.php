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
                        <h1>Your Subscription</h1>
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
                                <h3 class="card-title mb-0">Settings</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card m-auto" style="width: 18rem;">
                                            <div class="card-body">
                                                <p class="text-center bg-success">Your Current Plan</p>
                                                <img src="{{asset('img/free-icon.svg')}}" style="width: 60px" class="card-img-top mx-auto d-block" alt="payment logo">
                                                <h3 class="text-center text-muted text-uppercase mt-2">Free</h3>
                                                <p class="card-text mt-2">Perfect for businesses looking for all accounting
                                                    features at a fixed price.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card m-auto" style="width: 18rem;">
                                            <div class="card-body">
                                                <p class="text-center font-weight-bold">Subscription Summary</p>
                                                <div class="row mt-3">
                                                    <div class="col-7">
                                                        <span class="text-muted">Current Plan</span>
                                                    </div>
                                                    <div class="col-5 text-end">
                                                        <span>free</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-7">
                                                        <span class="text-muted">Your Subscription is due for renewal on</span>
                                                    </div>
                                                    <div class="col-5 text-end">
                                                        <span>2021-02-02</span>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-success d-flex justify-content-center rounded-pill mt-4">Update Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <p class="font-weight-bold">Your Plan Include</p>
                                        <ul>
                                            <li class="text-success">Try 30 days trail</li>
                                            <li class="text-success">no credit card required</li>
                                            <li class="text-success">no credit card required</li>
                                        </ul>
                                    </div>
                                </div>
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
