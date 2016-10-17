@extends('layouts.app')

@section('content')
    <h1 class="page-header">Create a Tenancy</h1>

    @include('partials.errors-section')
    
    <form action="{{ route('tenancies.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group">
            <label for="start-date">Start date</label>
            <input type="text" class="form-control" id="start-date" placeholder="Start date" name="start_date" value="{{ old('start_date') }}">
        </div>
        <div class="form-group">
            <label for="address">End date</label>
            <input type="text" class="form-control" id="end-date" placeholder="End date" name="end_date" value="{{ old('end_date') }}">
        </div>
        <div class="form-group">
            <label for="monthly-rent">Monthly rent</label>
            <input type="text" class="form-control" id="monthly-rent" placeholder="Monthly rate" name="monthly_rent" value="{{ old('monthly_rent') }}">
        </div>

        Tenants
        @foreach($tenants as $tenant)
        <div class="checkbox">
            <label>
                <input type="checkbox" name="tenants[{{$tenant->id}}]"> {{ $tenant->name }} 
            </label>
        </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
