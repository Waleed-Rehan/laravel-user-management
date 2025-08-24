@extends('layouts.app')

@section('title', 'Create User')
@section('header', 'Create User')

@section('content')
  <form method="POST" action="{{ route('users.store') }}" class="grid cols-2">
    @csrf
    @include('users._form', ['mode' => 'create'])
  </form>
@endsection
