@extends('layouts.app2')

@section('title', 'Minha casa na Internet • Mikael Oliveira')

@section('description', 'Descrição personalizada para a página inicial.')

@section('content')

    <x-pages.about.main />

    <x-pages.about.me />

    <x-pages.about.timeline />

    <x-pages.about.leanguages />

@endsection

@section('scripts')
    <script></script>
@endsection
