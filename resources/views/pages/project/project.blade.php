@extends('layouts.app2')

@section('title', 'Minha casa na Internet • Mikael Oliveira')

@section('description', 'Descrição personalizada para a página inicial.')

@section('content')

    <x-pages.project.hero />

    <x-pages.project.projects />

@endsection

@section('scripts')
    <script></script>
@endsection
