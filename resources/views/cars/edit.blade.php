@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Edit Car</h1>
        </div>
    </div>

    <div>
        <form action="/cars/{{$car->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="block">
                <input type="text" name="name" value="{{$car->name}}"placeholder="Brand name">
                <input type="text" name="founded" value="{{$car->founded}}" placeholder="Founded">
                <input type="text" name="description" value="{{$car->description}}" placeholder="Description">
                <button type="submit">Submit</button>    
            </div>
        </form>
    <div>
    
    </div>