@if ($errors->any())
  <div class="flash error">
    <strong>There were some problems with your input:</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if (session('success'))
  <div class="flash">
    {{ session('success') }}
  </div>
@endif
