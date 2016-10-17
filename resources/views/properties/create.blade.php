@extends('layouts.app')

@section('content')
    <h1 class="page-header">Create a Property</h1>

    @include('partials.errors-section')
    
    <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
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
            <p class="help-block">Image of property</p>
        </div>
        <div class="form-group">
            <label for="property-value">Property value</label>
            <input type="text" class="form-control" id="property-value" placeholder="Property value" name="property_value" value="{{ old('property_value') }}">
        </div>
        <div class="form-group">
            <label for="mortgage">Mortgage</label>
            <input type="text" class="form-control" id="mortgage" placeholder="Mortgage" name="mortgage" value="{{ old('mortgage') }}">
        </div>
        <div class="form-group">
            <label for="tenancy">Tenancy</label>
            <select name="tenancy_id" id="tenancy">
                @foreach($tenancies as $tenancy)
                    <option value="{{ $tenancy->id }}">{{ $tenancy->id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
