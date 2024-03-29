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
                        <h1>Profile</h1>
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
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if(Auth::user()->avatar)
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="{{Auth::user()->avatar}}"
                                             alt="User profile picture">
                                    @endif
                                </div>

                                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Settings</h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active tab-pane" id="settings">
                                        @include('app.includes.flash')

                                        <form action="{{route('profile.update', Auth::user()->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>First name</label>
                                                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Last name</label>
                                                        <input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>BirthDay</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <input type="text" name="birthday" value="{{Auth::user()->birthday}}" class="form-control datetimepicker-input" data-target="#reservationdate">
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input type="text" name="contact_number" value="{{Auth::user()->contact_number}}" class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="avatar" value="{{Auth::user()->avatar}}" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                                    file
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="male" id="male-chbx" type="radio" name="gender" {{Auth::user()->gender == 'male' ? 'checked' : ''}}>
                                                                <label class="form-check-label" for="male-chbx">Male</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="female" id="female-chbx" type="radio" name="gender" {{Auth::user()->gender == 'female' ? 'checked' : ''}}>
                                                                <label class="form-check-label" for="female-chbx">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
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
