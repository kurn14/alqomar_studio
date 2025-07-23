@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold underline">Selamat siang</h1>
    {{ $title }}
    {{ $description }}
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom1.css') }}">
@endpush


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom2.css') }}">
@endpush