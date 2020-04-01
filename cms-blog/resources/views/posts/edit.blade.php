@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Edit Post: {{$post->title}}</div>

    <div class="card-body">
        
        <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
           @csrf
           
           @method('PUT')
            <label for="">Title</label>
            <input type="text" value="{{$post->title}}" name="title" class="form-control"><br>
            
            <label for="">Select Category</label>
            <!--Need to get categories here-->
            <select name="category_id" class="form-control">
                
                @foreach ($categories as $cat)
                
                <option value="{{$cat->id}}" {{$cat->id == $post->category_id ? 'selected' : ''}}>{{$cat->name}}</option>
                
                @endforeach
            </select>
            
            <img src="{{url($post->featured)}}" class="mb-3" alt="{{$post->title}}" width="60" height="60"><br>
            
            <label for="">New Featured Image</label>
            <input type="file" name="featured" class="form-control">
            <br>
            
            <label for="">Content</label>
            <textarea name="content" id="" class="form-control" rows="10">{{$post->content}}</textarea><br>
            
            <input type="submit" value="Update Post" class="btn btn-success">
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