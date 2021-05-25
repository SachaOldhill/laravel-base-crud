@extends('layouts.main-layout')
@section('content')
    <div class="home_container">
      <ul>
        <li>
          <h1>Nome: {{ $ospite -> name }}</h1>
        </li>
        <li>
          <h1>Cognome: {{ $ospite -> lastname }}</h1>
        </li>
        <li>
          id: [{{ $ospite -> id }}]
        </li>
        <li>
          Data di nascita: {{ $ospite -> date_of_birth }}
        </li>
        <li>
          Tipo documento: {{ $ospite -> document_type }}
        </li>
        <li>
          Numero documento: {{ $ospite -> document_number }}
        </li>
     </ul>
    </div>
@endsection
