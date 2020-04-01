@extends('layouts.app')


@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Add New Post</div>

    <div class="card-body">
        
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
           @csrf
            <label for="">Title</label>
            <input type="text" value="{{old('title')}}" name="title" class="form-control"><br>
            
            <label for="">Select Category</label>
            <!--Need to get categories here-->
            <select name="category_id" class="form-control">
                
                @foreach ($categories as $cat)
                
                <option value="{{$cat->id}}" {{old('category_id')== $cat->id ? 'selected' : '' }} >{{$cat->name}}</option>
                
                @endforeach
            </select>
            
            <br>
            
            <label for="">Featured Image</label>
            <input type="file" name="featured" class="form-control">
            <br>
            
            <label for="">Content</label>
            <textarea name="content" id="" class="form-control" rows="10">{{old('content')}}</textarea><br>
            
            <input type="submit" value="Create Post" class="btn btn-success">
        </form>                         
                           
    </div>
    
    </div>
</div>

@endsection


@section('scripts')

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function(){
          CKEDITOR.replace( 'content' );  
        });
    </script>

@endsection