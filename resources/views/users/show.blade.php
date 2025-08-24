@extends('layouts.app')

@section('title', 'View User')
@section('header', 'User Details')

@section('content')
  <div class="grid cols-2">
    <div>
      <p><strong>Name:</strong><br>{{ $user->name }}</p>
      <p><strong>Email:</strong><br>{{ $user->email }}</p>
    </div>
    <div>
      <p><strong>Role:</strong><br><span class="badge">{{ $user->role ?? 'user' }}</span></p>
      <p><strong>Status:</strong><br>
        @if($user->is_active)
          <span class="badge green">Active</span>
        @else
          <span class="badge red">Inactive</span>
        @endif
      </p>
    </div>
  </div>

  <div class="actions" style="margin-top:1rem;">
    <a class="btn success" href="{{ route('users.edit', $user) }}">Edit</a>
    <a class="btn" href="{{ route('users.index') }}">Back</a>
  </div>
@endsection
