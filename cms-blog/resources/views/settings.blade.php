@extends('layouts.app')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Create a User</div>

        <div class="card-body">
           @include('layouts.errors')
           <form action="{{route('settings.update', $setting->id)}}" method="post">
               
               @csrf
               
               @method('PUT')
               <div class="form-group">
                   <label for="">Site Name</label>
                   <input type="text" name="site_name" value="{{$setting->site_name}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Contact Number</label>
                   <input type="text" name="contact_number" value="{{$setting->contact_number}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Contact Email</label>
                   <input type="text" name="contact_email" value="{{$setting->contact_email}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">Address</label>
                   <input type="text" name="address" value="{{$setting->address}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="">CopyRight Text</label>
                   <input type="text" name="copyright_text" value="{{$setting->copyright_text}}" class="form-control">
               </div>
               
               <div class="form-group">
                   <input type="submit" name="submit" value="Update" class="btn btn-success">
               </div>
           </form>
            
        </div>
    </div>
</div>


@endsection