@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    <ul>

            @forelse($projects as $project)
                <li><a href="{{route('portfolio.show', $project)}}">title}}</a></li>

            @empty
                <li>No hay proyectos para mostrar</li>
            @endforelse
            {{ $projects->links() }}

    </ul>


@endsection
