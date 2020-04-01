@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Tags</div>

    <div class="card-body">
                   
        <div class="row">
           <div class="col-md-12">
             @include('layouts.errors')
           </div>
            <div class="col-md-6">
                <!--table to view category-->
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                        <th width="30">S.N.</th>
                        <th>Name:</th> 
                        <th>Posts Count:</th>
                        <th>Actions</th>   
                        </tr>
                    </thead>
                    
                    <tbody>
                       <!--get all categories-->
                       
                       @if(count($tags)>0)
                       
                       @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->posts->count()}}</td>
                            
                            <td>
                                <a href="{{route('tags.edit', $cat->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        @else
                            <tr>
                                <td colspan = "4">No Tags are available!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-6">
                <!--Form for category-->
                
                <form action="{{route('tags.store')}}" method="post">
                   @csrf
                    <label for="Cat"><strong>Add Tag</strong></label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control">
                    <br>
                    <input type="submit" value="Create" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>           
                   
    </div>
    
    </div>
</div>

@endsection