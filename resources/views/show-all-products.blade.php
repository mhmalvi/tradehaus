@extends('layout.master')
@section('content')

<livewire:show-all-products :products='$products'/>

@endsection