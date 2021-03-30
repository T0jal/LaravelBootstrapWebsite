@extends('master.main')

@section('content')
    @component('components.gallery', ['galleries'=>$galleries])
    @endcomponent
@endsection
