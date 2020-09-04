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
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Author</th>
                                <th scope="col">Created & Updated</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach($events as $event)
                        <tr>
                            <th scope="row">{{ $event->id }}</th>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->content }}</td>
                            <td>{{ $event->author }}</td>
                            <td>{{ $event->created_at }} | {{ $event->updated_at }}</td>
                            <td>
                                @can('manage-events')
                                <a href="{{ route('events.events.show', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Show</button></a>
                                @endcan
                                @can('manage-events')
                                <a href="{{ route('events.events.edit', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Edit</button></a>
                                @endcan

                                @can('manage-events')
                                <form action="{{ route('events.events.destroy', $event->id) }}" method="POST" class="float-left">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                                @endcan
                            </td>
                        </td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
