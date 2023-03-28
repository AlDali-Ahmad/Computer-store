@extends('layout')
@section('contect')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8">
            <h1>&nbsp&nbsp&nbsp&nbspCopmuters</h1>
        @if(count($compueters)>0)
            @foreach($compueters as $comp)
                <ul><a href="{{ route('compeuters.show',[$comp['id']]) }}">
                    <li>
                        {{$comp['name']}} is from <strong>{{$comp['origin']}} {{$comp['price']}}$</strong>
                    </li>
                    </a>
                </ul>
            @endforeach
            @else
            The Page No Copmueters
        @endif
        </div>
    </div>
</div>
</body>@endsection
@section('title','Page compeuter index')
