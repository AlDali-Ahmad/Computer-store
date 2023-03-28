@extends('layout')
@section('contect')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h2>Create a new Computer</h2>
        </div>

        <div class="flex justify-center">
            <form action="{{route('compeuters.store')}}" method="post" class="form bg-white p-6 border-1">
                @csrf
                <div>
                    <label for="computer-name">Computer Name</label>
                    <input id="computer-name" name="computer-name" type="text" value="{{old('computer-name')}}">
                    @error('computer-name')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-origin">Computer Origin</label>
                    <input id="computer-origin" name="computer-origin" type="text" value="{{old('computer-origin')}}">
                    @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-price">Computer Price</label>
                    <input id="computer-price" name="computer-price" type="text" value="{{old('computer-price')}}">
                    @error('computer-price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection
@section('title','Page compeuter create')
