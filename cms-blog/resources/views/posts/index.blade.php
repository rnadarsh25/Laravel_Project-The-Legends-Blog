@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">View All Posts</div>

    <div class="card-body">
        <!--Table to lists posts-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="40">S.N.</th>
                    <th>Title</th>
                    <th>Featured Image</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Trash</th>
                </tr>
            </thead>
            
            <tbody>
              @if(count($posts)>0)
               @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <img src="{{url($post->featured)}}" alt="{{$post->title}}" width="60" height="60">
                    </td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>  
                       <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" value="Trash" class="btn btn-warning btn-sm">
                           
                       </form>
                    </td>
                </tr>
                @endforeach
                
                @else
                    <tr>
                        <td colspan="6"> No Posts !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>       
    </div>
    
    </div>
</div>

@endsection