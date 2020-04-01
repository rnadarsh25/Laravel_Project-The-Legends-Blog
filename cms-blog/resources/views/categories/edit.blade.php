@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Edit Category</div>

    <div class="card-body">
                   
        <div class="row">
           <div class="col-md-12">
             @include('layouts.errors')
           
           <form action="{{route('categories.update', $category->id)}}" method="post">
                   @csrf
                   <!--To updat eany data we need to use put method-->
                   @method('PUT')
                    <label for="Cat"><strong>Update Category</strong></label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control">
                    <br>
                    <input type="submit" value="Update" class="btn btn-primary btn-sm">
            </form>
            </div>    
        </div>
    </div>
    </div>
</div>    

@endsection