@extends('layouts.app2')

@section('title', 'Minha casa na Internet • Mikael Oliveira')

@section('description', 'Descrição personalizada para a página inicial.')

@section('content')

    <x-pages.blog.hero />

    <x-pages.blog.post />

    <x-pages.blog.newsletter />

@endsection

@section('scripts')
    <script></script>
@endsection
