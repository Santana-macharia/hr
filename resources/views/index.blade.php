@extends('layouts.app')

@section('content')
    @if(count($forms)>1)
        @foreach($forms as $form)
        @endforeach
    @else
    <p>No forms found</p>
    @endif
@endsection