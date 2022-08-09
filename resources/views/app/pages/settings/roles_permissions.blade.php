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
                                @include('app.includes.flash')
                                @if($organisation)
                                    <form class="card" action="{{route('roles.update', $organisation->id)}}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Organisation Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$organisation->name ?: ''}}" placeholder="Organisation name">
                                            </div>
                                            <div class="form-group">
                                                <label for="group-select">Select Group</label>
                                                <select name="group_id" class="select2 custom-select form-control-border border-width-2 group-select" id="group-select">
                                                    @foreach($groups as $group)
                                                        <option @selected($organisation->group_id == $group->id)
                                                            value="{{$group->id ?: ''}}">
                                                            {{$group->name ?: ''}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select2-market">Markets</label>
                                                <div class="select2-purple">
                                                    <select name="markets[]" id="select2-market" class="select2 select2-market" multiple="multiple" data-placeholder="Select Market" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                        @if($activeMarkets)
                                                            @foreach($activeMarkets as $activeMarket)
                                                                <option selected>{{$activeMarket->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectBorderWidth2">Currency</label>
                                                <select name="currency" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                                                    @foreach($currencies as $currency)
                                                        <option @selected($organisation->currency == $currency)
                                                            value="{{$currency}}">{{Str::upper($currency)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer clearfix">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="#" class="btn btn-danger float-end">Delete organisation</a>
                                        </div>
                                    </form>
                                @else
                                    <p>You need to create your first organization</p>
                                @endif
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
