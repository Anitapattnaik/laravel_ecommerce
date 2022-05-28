@extends('admin.layout')

@section('page_title','Manage Coupon')
@section('container')

<a href="{{ url('admin/coupon')}}"><button type="button" class="btn btn-success">Back</button></a>

<div class="row m-t-30">

    <div class="col-md-12">
    <div class="row">
                            <div class="col-lg-12">
                               
                               
                                <div class="card">
                                    <div class="card-header">Manage Coupon</div>
                                    <div class="card-body">
                                  
                                        <form action="{{route('coupon.manage_coupon_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Coupon title</label>
                                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$title}}" required>
                                                @error('title')
                                                <div class="alert alert-danger" role="alert">

                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="code" class="control-label mb-1">Coupon code</label>
                                                <input id="code" name="code" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on code"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" value="{{$code}}" aria-describedby="cc-name-error" required>
                                                @error('code')
                                                <div class="alert alert-danger" role="alert">

                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="value" class="control-label mb-1">Coupon value</label>
                                                <input id="value" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$value}}" required>
                                                @error('value')
                                                <div class="alert alert-danger" role="alert">

                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit 
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{ $id }}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Ecommerce</a>.</p>
                                </div>
                            </div>
                        </div>
    </div>
</div>
@endsection