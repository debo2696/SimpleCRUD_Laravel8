@extends('layouts.app')

@section('content')


<div class="w-4/5 py-10">
   
    <div class="m-auto">
        
        <span class="uppercase text-blue-500 font-bold text-xs italic">
        Founded: {{$car->founded}}
        </span>

        <h2 class="text-gray-700 text-5xl">
            <a href="/cars/{{$car->id}}">
                {{$car->name}}
            </a>
        </h2>

        <p class="text-lg text-gray-700 p">
            {{$car->description}}
        </p>

        <ul>
            <p class="">
            Models:
            </p>

            @forelse($car->carModels as $model)
            <li class="">    
                {{$model['model_name']}}
            </li>
            @empty
                <p>Empty!</p>
            @endforelse
        </ul>

        <hr class="mt-4 mb-8">
        
    </div>
    @endsection