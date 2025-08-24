@extends('layouts.app')

@section('title', 'Users')
@section('header', 'Users')

@section('content')
  <form method="GET" action="{{ route('users.index') }}" class="searchbar" style="margin-bottom:.75rem;">
    <input type="text" name="q" placeholder="Search name/email/role..." value="{{ $search }}">
    <button class="btn">Search</button>
    @if($search)
      <a class="btn" href="{{ route('users.index') }}">Clear</a>
    @endif
  </form>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th style="width:260px;">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>#{{ $user->id }}</td>
          <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
          <td>{{ $user->email }}</td>
          <td><span class="badge">{{ $user->role ?? 'user' }}</span></td>
          <td>
            @if($user->is_active)
              <span class="badge green">Active</span>
            @else
              <span class="badge red">Inactive</span>
            @endif
          </td>
          <td class="actions">
            <a class="btn" href="{{ route('users.show', $user) }}">View</a>
            <a class="btn success" href="{{ route('users.edit', $user) }}">Edit</a>
            <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Delete this user?')">
              @csrf
              @method('DELETE')
              <button class="btn danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="muted">No users found.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div style="margin-top:.75rem;">
    {{ $users->links() }}
  </div>
@endsection
