@extends('layouts.app')
@section('content')

  <div class="container">
      <h3 class="text-center text-success p-2 font-weight-bold">Shopping Cart Exercise by Admire Mukoko</h3>
      <h4 class="text-center text-primary font-italic p-3">******** Build with Laravel and Livewire******* </h4>
      <hr>
  </div>

    @livewire('products.index')
@endsection
