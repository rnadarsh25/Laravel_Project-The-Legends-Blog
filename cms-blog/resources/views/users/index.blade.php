@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">View All Users</div>

        <div class="card-body">
        
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Permissions</th>
                    <th>Avatar</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->isAdmin)
                            
                            <a href="{{route('remove.admin', $user->id)}}" class="btn btn-warning btn-sm">Remove Admin</a>
                            
                        @else
                        
                           <a href="{{route('make.admin', $user->id)}}" class="btn btn-success btn-sm">Make Admin</a>
                        
                        @endif
                    </td>
                    <td>
                        <img src="" alt="" width="60" height="60">
                    </td>
                    <td>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                       <form action="{{route('users.destroy', $user->id)}}" method="post">
                           
                           @csrf
                           @method('DELETE')
                           <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
                       </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            
        </div>
    </div>
</div>


@endsection