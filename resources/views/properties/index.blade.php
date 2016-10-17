@extends('layouts.app')

@section('content')
    <h1 class="page-header">Properties</h1>

    @include('partials.messages-section')

    @if($tenancies->count())
        <a href="{{ route('properties.create') }}" class="btn btn-success btn-lg active" role="button">Create</a>
    @else
        You should create a tenancy first
    @endif

    @if($properties->count())
        @include('properties.partials.properties')
    @else
        <div class="row">
            <div class="col-md-12">
                No properties yet
            </div>
        </div>
    @endif
@endsection
