@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    {{-- header --}}
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Users</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.user.index')}}">Users</a></li>
                <li><a href="{{route('admin.user.edit', $user->id)}}">Edit User</a></li>
            </ol>
        </div>
    </div>
    {{-- header --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Edit User</h3>
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{route('admin.user.update', $user->id)}}" method="POST">
                        @csrf
                        <div class="row">{{-- row --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Email</label>
                                    <div>
                                        <input type="email" disabled name="email" placeholder="Email" class="form-control form-control-line" value="{{$user->email}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Phone</label>
                                    <div>
                                        <input type="tel" disabled name="phone" placeholder="Phone" class="form-control form-control-line" value="{{$user->phone}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>First Name</label>
                                    <div>
                                        <input type="text" name="first_name" placeholder="First Name" class="form-control form-control-line" value="{{$user->first_name}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Last Name</label>
                                    <div>
                                        <input type="text" name="last_name" placeholder="Last Name" class="form-control form-control-line" value="{{$user->last_name}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Gender</label>
                                    <div>
                                        <select name="gender" class="form-control form-control-line" >
                                            <option value="{{$user->gender}}" selected>{{$user->gender}}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Date of Birth</label>
                                    <div>
                                        <input type="date" name="dob" placeholder="Date of Birth" class="form-control form-control-line" value="{{$user->dob->format('Y-m-d')}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-12">{{-- col-md-12 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-12 --}}
                        </div>{{-- //row --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Update User Password</h3>
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{route('admin.user.pass_update', $user->id)}}" method="POST">
                        @csrf
                        <div class="row">{{-- row --}}                            
                            <div class="col-md-12">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Set New Password</label>
                                    <div>
                                        <input type="password" name="password" placeholder="********" class="form-control form-control-line">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-12">{{-- col-md-12 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-12 --}}
                        </div>{{-- //row --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection