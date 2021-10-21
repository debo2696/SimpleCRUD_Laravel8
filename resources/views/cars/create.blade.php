@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Create Car</h1>
        </div>
    </div>

    <div>
        <form action="/cars" method="post">
            @csrf
            <div class="block">
                <input type="text" name="name" placeholder="Brand name">
                <input type="text" name="founded" placeholder="Founded">
                <input type="text" name="description" placeholder="Description">
                <button type="submit">Submit</button>    
            </div>
        </form>
    <div>
    
    </div>