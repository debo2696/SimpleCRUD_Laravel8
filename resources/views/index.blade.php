@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Cars</h1>
        </div>
    </div>

    <div class="pt-10">
        <a href="cars/create" class="border">
            Add new Car &rarr;
        </a>
    </div>

    <div class="w-4/5 py-10">
        @foreach ($cars as $car)
        <div class="m-auto">
            
            <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded: {{$car->founded}}
            </span>

            <a href="cars/{{$car->id}}/edit" class="border">
                Edit &rarr;
            </a>

            <form action="cars/{{$car->id}}" method="POST" class="border">
                @csrf
                @method('DELETE')
                <button type="submit">Delete &rarr;</button>
            </form>

            <h2 class="text-gray-700 text-5xl">
                <a href="/cars/{{$car->id}}">
                    {{$car->name}}
                </a>
            </h2>

            <p class="text-lg text-gray-700 p">
                {{$car->description}}
            </p>

            <hr class="mt-4 mb-8">
            
        </div>
        @endforeach
    </div>
@endsection