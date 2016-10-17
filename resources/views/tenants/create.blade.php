@extends('layouts.app')

@section('content')
    <h1 class="page-header">Create a Tenant</h1>

    @include('partials.errors-section')
    
    <form action="{{ route('tenants.store') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ old('address') }}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" value="{{ old('image') }}">
            <p class="help-block">Image of tenant</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
