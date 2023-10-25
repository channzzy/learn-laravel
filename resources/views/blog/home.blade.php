@extends('layouts.app',['title' => 'Home'])
@section('content')

    <x-alert>
        <x-slot name="title">
            <h5>Header html</h5>
        </x-slot>
        <p>Ini adalah children</p>
        @slot('footer')
            <h3>Footer html</h3>
        @endslot
    </x-alert>

    <h1>Ini adalah gambar gunung</h1>
    <div class="img-satu">
        <img src="https://plus.unsplash.com/premium_photo-1664116707664-012c2fd94fba?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <div class="img-dua" style="display: flex; justify-content: flex-end">
        <img src="https://plus.unsplash.com/premium_photo-1664116707664-012c2fd94fba?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <marquee>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis unde laborum nesciunt laudantium necessitatibus architecto ratione distinctio fuga ipsum quidem, minima aut non eos doloremque cumque deleniti iure itaque perspiciatis.</marquee>
@endsection