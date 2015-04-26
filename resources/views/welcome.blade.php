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

@endsection

@section('advertisement')
  @parent
  <p><a href="#"
  class="btn btn-success">Button</a></p>
@endsection

