@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Welcome to Your Dashboard</h4>
    </div>
    <div class="card-body">
        <p>Hello, {{ auth()->user()->name }} 👋</p>
@endsection
