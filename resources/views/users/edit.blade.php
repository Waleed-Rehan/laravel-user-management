@extends('layouts.app')

@section('title', 'Edit User')
@section('header', 'Edit User')

@section('content')
  <form method="POST" action="{{ route('users.update', $user) }}" class="grid cols-2">
    @csrf
    @method('PUT')
    @include('users._form', ['mode' => 'edit'])
  </form>
@endsection
