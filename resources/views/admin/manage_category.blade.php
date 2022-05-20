@extends('admin.layout')

@section('container')

<a href="{{ url('admin/category')}}"><button type="button" class="btn btn-success">Back</button></a>

<div class="row m-t-30">

    <div class="col-md-12">
    <div class="row">
                            <div class="col-lg-12">
                               
                                {{session('message')}}
                                <div class="card">
                                    <div class="card-header">Manage Category</div>
                                    <div class="card-body">
                                       
                                        <form action="{{route('category.insert')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="category" class="control-label mb-1">Category</label>
                                                <input id="category_name" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                                                @error('category_name')
                                                <div class="alert alert-danger" role="alert">

                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                                <input id="category_slug" name="category_slug" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                                                @error('category_slug')
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