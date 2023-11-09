<x-app-layout title="Profile Page">
    @slot('styles')
        <style>
            body{
                background: indianred;
            }
        </style>
    @endslot
    <h1>Hallo {{ $name ?? 'User'}} Selamat Datang</h1>


    <form action="/profile" method="post">
        @csrf
        <button type="submit">Send</button>
    </form>
</x-app-layout>