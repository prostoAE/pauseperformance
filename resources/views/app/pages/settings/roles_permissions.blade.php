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
                        <h1>Roles & Permissions</h1>
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
                    <div class="col-sm-3">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-roles" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Roles
                                & Permissions </a>
                            <a class="list-group-item list-group-item-action" id="list-invite" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Invite
                                new user </a>
                            <a class="list-group-item list-group-item-action" id="list-edit-org" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Edit
                                Organisation </a>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-roles">
                                <p>
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-question-circle"></i>
                                         Explanation of roles
                                    </a>
                                </p>
                                <div class="collapse show" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="card_title"><i class="fas fa-solid fa-key"></i> Admin</h4>
                                                <p class="card_content">An Admin have full access to everything within
                                                    an organization. This includes all media settings, account
                                                    management and user management Admins may also set fields as
                                                    restricted,</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="card_title"><i class="fas fa-edit"></i> Editor</h4>
                                                <p class="card_content">An Editor can add, update and delete media data
                                                    and can also create campaigns and upload files. They may also set
                                                    plan statuses and send plans for approval, They don't have access to
                                                    settings</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="card_title"><i class="fas fa-glasses"></i> Viewer</h4>
                                                <p class="card_content">A Viewer can view media data but not change
                                                    anything within an organization. They can also approve or reject
                                                    plans assigned to them for approval</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-invite">
                                <form class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectBorderWidth2">Role</label>
                                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                                                <option>Admin</option>
                                                <option>Editor</option>
                                                <option>Viewer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Send an Email</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-edit-org">
                                <form class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Organisation Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Organisation name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectBorderWidth2">Select Group</label>
                                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                                                <option>Admin</option>
                                                <option>Editor</option>
                                                <option>Viewer</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectBorderWidth2">Markets</label>
                                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                                                <option>Admin</option>
                                                <option>Editor</option>
                                                <option>Viewer</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectBorderWidth2">Currency</label>
                                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                                                <option>EUR</option>
                                                <option>USD</option>
                                                <option>DKK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer clearfix">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="#" class="btn btn-danger float-end">Delete organisation</a>
                                    </div>
                                </form>
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
