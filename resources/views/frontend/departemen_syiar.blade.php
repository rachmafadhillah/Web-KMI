<!-- frontend/departemen_syiar.blade.php -->

@extends('layouts.frontend')

@section('title', 'Departemen Syiar')

@section('content')
    @include('frontend.departemen') {{-- Isi dengan konten dari departemen.blade.php --}}
    @include('frontend.syiar') {{-- Isi dengan konten dari syiar.blade.php --}}
@endsection
