@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Trashed Posts</div>

    <div class="card-body">
        <!--Table to lists posts-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="40">S.N.</th>
                    <th>Title</th>
                <th>Content</th>
                    <th>Featured Image</th>
<!--                    <th>Category</th>-->
                    <th>Restore</th>
                    <th>Delete</th>
                </tr>
            </thead>
            
            <tbody>
              @if(count($posts)>0)
               @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
<!--                    <td>{{$post->content}}</td>-->
                    <td>
                        <img src="{{url($post->featured)}}" alt="{{$post->title}}" width="60" height="60">
                    </td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <a href="{{route('posts.restore', $post->id)}}" class="btn btn-success btn-sm">Restore</a>
                    </td>
                    <td>
                        <a href="{{route('posts.kill', $post->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
                
                @else
                    <tr>
                        <td colspan="7"> No Posts !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>       
    </div>
    
    </div>
</div>

@endsection