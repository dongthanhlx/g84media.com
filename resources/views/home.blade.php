@extends('layouts.app')

@section('content')
    <div class="space-y-16">
        @include('components.background')
        @include('components.aboutus')
        @include('components.projects')
        @include('components.services')
        @include('components.team')
    </div>
@endsection
