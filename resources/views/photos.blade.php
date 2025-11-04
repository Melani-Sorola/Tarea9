@extends('layouts.admin')
@section('title', 'Photos')

@section('content')
  <h1>Photos Section</h1>
  <p>Below you can find example images similar to the previous activity.</p>

  <div class="row">
    @for ($i = 1; $i <= 4; $i++)
      <div class="col-md-3 mb-3">
        <img src="https://picsum.photos/seed/{{ $i }}/200/150" class="img-fluid rounded" alt="Photo {{ $i }}">
      </div>
    @endfor
  </div>
@endsection
