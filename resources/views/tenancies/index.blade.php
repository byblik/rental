@extends('layouts.app')

@section('content')
    <h1 class="page-header">Tenancies</h1>

    @include('partials.messages-section')

    @if($tenants->count())
        <a href="{{ route('tenancies.create') }}" class="btn btn-success btn-lg active" role="button">Create</a>
    @else
        You should create a tenant first
    @endif

    @if($tenancies->count())
        @include('tenancies.partials.tenancies')
    @else
        <div class="row">
            <div class="col-md-12">
                No tenancies yet
            </div>
        </div>
    @endif
@endsection
