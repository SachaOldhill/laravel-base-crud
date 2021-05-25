@extends('layouts.main-layout')
@section('content')
    <div class="home_container">
      <h1>Ospiti</h1>
      <ul>
        @foreach ($ospiti as $ospite)
          <li>
            <a class="text-secondary"href="{{ route('ospite', $ospite -> id) }}">
              {{ $ospite -> name }}
              {{ $ospite -> lastname }}
            </a>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
