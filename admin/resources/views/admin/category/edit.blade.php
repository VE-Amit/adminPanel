@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    {{-- header --}}
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Category</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.category.index')}}">Categories</a></li>
                <li><a href="{{route('admin.category.edit', $category->id)}}">Edit Category</a></li>
            </ol>
        </div>
    </div>
    {{-- header --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Edit Category</h3>
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{route('admin.category.update', $category->id)}}" method="POST">
                        @csrf
                        <div class="row">{{-- row --}}
                            <div class="form-group">{{-- form-group --}}
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder="Category Name" class="form-control form-control-line" value="{{$category->name}}">
                                </div>
                            </div>{{-- //form-group --}}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>{{-- //row --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection