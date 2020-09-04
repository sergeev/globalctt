@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    @can('manage-events')
                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Create event</h5>
                            <p class="card-text">Add cool event!</p>
                            <a href="{{ route('events.events.index') }}" class="btn btn-primary">Add Event</a>
                        </div>
                    </div>
                </div>
                @endcan
            </div>

        </div>
    </div>
</div>
</div>
@endsection
