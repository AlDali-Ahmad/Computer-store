@extends('layout')
@section('contect')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            Page Compueter
        </div>
        <div class="mt-8">
            <h3>
                {{$compueters['name']}} is from <strong>{{$compueters['origin']}} {{$compueters['price']}}$</strong>
            </h3>
        </div>
            <a class="edit-btn" href="{{route('compeuters.edit',$compueters->id)}}">Edit</a>
        <form action="{{route('compeuters.destroy',$compueters->id)}}" method="post" class="delete-btn">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    </div>

</div>
@endsection
@section('title','Page compeuter show')
