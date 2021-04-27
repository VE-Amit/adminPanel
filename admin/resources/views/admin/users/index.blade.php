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
            </ol>
        </div>
    </div>
    {{-- header --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                {{-- <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                    <select class="form-control pull-right row b-none">
                        <option>March 2017</option>
                        <option>April 2017</option>
                        <option>May 2017</option>
                        <option>June 2017</option>
                        <option>July 2017</option>
                    </select>
                </div> --}}
                <h3 class="box-title">Users</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($users->count() == 0)
                            <tr>
                                <td>
                                    no universities available
                                </td>
                            </tr>
                            @endif
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td class="txt-oflo">{{$user->role->name}}</td>
                                <td class="txt-oflo">{{$user->first_name}} {{$user->last_name}}</td>
                                <td class="txt-oflo">{{$user->email}}</td>
                                <td class="txt-oflo">{{$user->phone ?? 'NA'}}</td>
                                <td class="txt-oflo">{{$user->dob->format('d-M-Y') ?? 'NA'}}</td>
                                <td class="txt-oflo">{{$user->gender ?? 'NA'}}</td>
                                <td class="txt-oflo text-xs">
                                    <span>{{$user->created_at->diffForHumans()}}</span>
                                </td>
                                <td style="display: flex; font-weight:500;">
                                    <a href="{{route('admin.user.edit', $user->id)}}" class="btn-xs">Edit</a>
                                    <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn-xs" style="display: inline; border:none; color:#f33155; background:transparent;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$users->links()}} --}}
                </div>
            </div>
        </div>
    </div>
@endsection