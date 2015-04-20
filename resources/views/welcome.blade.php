@extends('layouts.master') 

@section('content')
  	<h1>Welcome to your to-do list</h1>
    <ul>
      @forelse ($lists as $list)
        <li>{{ $list }}</li> 
      @empty
        <li>You don't have any lists saved.</li>
      @endforelse
    </ul>

  <table class="table borderless">
    @include('partials.row')
  </table>

@endsection

@section('advertisement')
  @parent
  <p>Ad #2</p>
@endsection

