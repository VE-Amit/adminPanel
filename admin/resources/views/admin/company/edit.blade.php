@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    {{-- header --}}
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Companies</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.company.index')}}">Companies</a></li>
                <li><a href="{{route('admin.company.edit', $company->id)}}">Edit Company</a></li>
            </ol>
        </div>
    </div>
    {{-- header --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Edit Company</h3>
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{route('admin.company.update', $company->id)}}" method="POST">
                        @csrf
                        <div class="row">{{-- row --}}
                            <div class="col-md-12">{{-- col-md-12 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Name</label>
                                    <div>
                                        <input type="text" name="name" placeholder="Name" class="form-control form-control-line" value="{{$company->name}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-12 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>City</label>
                                    <div>
                                        <input type="text" name="city" placeholder="City" class="form-control form-control-line" value="{{$company->city}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Category</label>
                                    <div>
                                        <select name="category_id"  class="form-control form-control-line" >
                                            <option value="{{$company->category_id}}" selected>{{$company->category->name}}</option>
                                            @foreach ($categories as $cat)
                                                @if($cat->id != $company->category_id)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Zip Code</label>
                                    <div>
                                        <input type="text" name="zipcode" placeholder="Zip Code" class="form-control form-control-line" value="{{$company->zipcode}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-6">{{-- col-md-6 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>VAT Number</label>
                                    <div>
                                        <input type="text" name="vat_number" placeholder="VAT Number" class="form-control form-control-line" value="{{$company->vat_number}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-6 --}}
                            <div class="col-md-12">{{-- col-md-12 --}}
                                <div class="form-group">{{-- form-group --}}
                                    <label>Address</label>
                                    <div>
                                        <input type="text" name="address" placeholder="Address" class="form-control form-control-line" value="{{$company->address}}">
                                    </div>
                                </div>{{-- //form-group --}}
                            </div>{{-- //col-md-12 --}}
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