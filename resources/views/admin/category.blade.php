@extends('admin.layout')

@section('container')



<div class="alert alert-success" role="alert">

{{session('message')}}
</div>

<h1 class="mb10">Category</h1>
<a href="category/manage_category"><button type="button" class="btn btn-success">Add Category</button></a>

<div class="row m-t-30">

    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Category Slug</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @php $slno =1; @endphp
                    @foreach($data as $list)
                    <tr>
                        <td>{{$slno++}}</td>
                        <td>{{$list['category_name']}}</td>
                        <td>{{$list['category_slug']}}</td>
                        <td>
                            <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                        </td>
                       
                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection