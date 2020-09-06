@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $event->title }} 
                    <p>{{ trans('event.created_at') }} {{ $event->created_at }} {{ trans('event.author') }} {{ $event->author }}</p>
                </div>
                <div class="card-body">
                    {!! $event->content !!}
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type = "buttor" class= "btn btn-primary float-left">{{ trans('event.back') }}</button>
                    </a>
                    @endcan
                    @can('manage-events')
                    <a href="{{ route('events.events.edit', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-right">{{ trans('event.edit') }}</button></a>
                    @endcan
                    @can('manage-events')
                    <form action="{{ route('events.events.destroy', $event->id) }}" method="POST" class="float-right">
                        @csrf
                        <script type="text/javascript">
                            function confirmDelete() {
                              var result = confirm('Вы уверены, что хотите удалить статью?');
                              if (result) {
                                 return true;
                             } else {
                                 return false;
                             }
                         }
                     </script>

                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-warning">{{ trans('event.delete') }}</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
