@php
  $isEdit = isset($mode) && $mode === 'edit';
@endphp

<div class="field">
  <label for="name">Name</label>
  <input id="name" type="text" name="name" value="{{ old('name', $isEdit ? $user->name : '') }}" required>
</div>

<div class="field">
  <label for="email">Email</label>
  <input id="email" type="email" name="email" value="{{ old('email', $isEdit ? $user->email : '') }}" required>
</div>

<div class="field">
  <label for="password">Password @if($isEdit)<span class="muted">(leave blank to keep existing)</span>@endif</label>
  <input id="password" type="password" name="password" @if(!$isEdit) required @endif>
</div>

<div class="field">
  <label for="role">Role</label>
  <select id="role" name="role">
    @php $roleVal = old('role', $isEdit ? $user->role : 'user'); @endphp
    <option value="user" @selected($roleVal==='user')>user</option>
    <option value="admin" @selected($roleVal==='admin')>admin</option>
  </select>
</div>

<div class="field">
  <label for="is_active">Status</label>
  @php $active = old('is_active', $isEdit ? (int)$user->is_active : 1); @endphp
  <select id="is_active" name="is_active">
    <option value="1" @selected($active==1)>Active</option>
    <option value="0" @selected($active==0)>Inactive</option>
  </select>
</div>

<div style="grid-column: 1 / -1; display:flex; gap:.5rem; margin-top:.5rem;">
  <button class="btn primary" type="submit">{{ $isEdit ? 'Save Changes' : 'Create User' }}</button>
  <a class="btn" href="{{ route('users.index') }}">Cancel</a>
</div>
