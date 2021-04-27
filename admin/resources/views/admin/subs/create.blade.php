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
                <li><a href="{{route('admin.subs.index')}}">Subscriptions</a></li>
                <li><a href="{{route('admin.subs.create')}}">Create Subscription</a></li>
            </ol>
        </div>
    </div>
    {{-- header --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Create Subscription</h3>
                    <div class="white-box">
                        <form class="form-horizontal form-material" action="{{route('admin.subs.store')}}" method="POST">
                            @csrf
                            <div class="row">{{-- row --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Subscription A" class="form-control form-control-line">
                                    </div>
                                </div>{{-- //form-group --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label class="col-md-12">Overview</label>
                                    <div class="col-md-12">
                                        <textarea name="description" rows="5" class="form-control form-control-line" placeholder="Description"></textarea>
                                    </div>
                                </div>{{-- //form-group --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label class="col-md-12">Cost</label>
                                    <div class="col-md-12">
                                        <input type="text" name="cost" placeholder="$ 2" class="form-control form-control-line">
                                    </div>
                                </div>{{-- //form-group --}}
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>{{-- //row --}}
                        </form>
                    </div>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection