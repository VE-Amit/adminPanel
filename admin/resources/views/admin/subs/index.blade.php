@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    {{-- header --}}
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Subscription</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.subs.index')}}">Subscription</a></li>
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
                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                    <a href="{{route('admin.subs.create')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add</a>
                </div>
                <h3 class="box-title">Subscriptions</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Cost/Month</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($subs->count() == 0)
                            <tr>
                                <td>
                                    no Subscription available
                                </td>
                            </tr>
                            @endif
                            @foreach ($subs as $sub)
                            <tr>
                                <td>{{$sub->id}}</td>
                                <td class="txt-oflo">{{$sub->name}}</td>
                                <td class="txt-oflo">{{$sub->description}}</td>
                                <td class="txt-oflo">${{$sub->cost ?? 'Free'}}</td>
                                <td class="txt-oflo text-xs">
                                    <span>{{$sub->created_at->diffForHumans()}}</span>
                                </td>
                                <td style="display: flex; font-weight:500;">
                                    <a href="{{route('admin.subs.edit', $sub->id)}}" class="btn-xs">Edit</a>
                                    <form action="{{route('admin.subs.delete', $sub->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn-xs" style="display: inline; border:none; color:#f33155; background:transparent;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection