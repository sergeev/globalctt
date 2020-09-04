@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Events List
                    @can('manage-events')
                    <a href="{{ route('events.events.create') }}"><button type = "buttor" class= "btn btn-primary float-right">Добавить</button></a>
                    @endcan
                </div>
            </div>
        </div>

        
        <div class="col-md-12">
            @foreach($events as $event)
            <div class="card">
                <div class="card-header">{{ $event->title }}
                </div>
                <div class="card-body">
                    {{ $event->content }}
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.show', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Show</button></a>
                    @endcan
                    @can('manage-events')
                    <a href="{{ route('events.events.edit', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-right">Edit</button></a>
                    @endcan

                    @can('manage-events')
                    <form action="{{ route('events.events.destroy', $event->id) }}" method="POST" class="float-right">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                    @endcan
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection
