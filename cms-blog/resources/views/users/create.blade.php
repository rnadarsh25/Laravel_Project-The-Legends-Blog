@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Create a User</div>

        <div class="card-body">
           @include('layouts.errors')
           <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
               
               @csrf
               <h4>General:</h4>
               <div class="form-group">
                   <label for="">Name</label>
                   <input type="text" name="name" value="{{old('name')}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Email</label>
                   <input type="email" name="email" value="{{old('email')}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Password</label>
                   <input type="password" name="password" class="form-control">
               </div>
               
               <h4>Profile:</h4>
               <div class="form-group">
                   <label for="">Avatar</label>
                   <input type="file" name="avatar" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Facebook</label>
                   <input type="text" name="facebook" value="{{old('facebook')}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Short Info:</label>
                  <textarea name="about" rows="5" class="form-control">{{old('about')}}</textarea>
               </div>
               
               <div class="form-group">
                   <input type="submit" name="submit" value="Create" class="btn btn-success">
               </div>
           </form>
            
        </div>
    </div>
</div>


@endsection