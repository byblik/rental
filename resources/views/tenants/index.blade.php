@extends('layouts.app')

@section('content')
    <h1 class="page-header">Tenants</h1>

    @include('partials.messages-section')

    <a href="{{ route('tenants.create') }}" class="btn btn-success btn-lg active" role="button">Create</a>

    @if($tenants->count())
        @include('tenants.partials.tenants')
    @else
        <div class="row">
            <div class="col-md-12">
                No tenants yet
            </div>
        </div>
    @endif
@endsection
