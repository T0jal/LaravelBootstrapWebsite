@extends('master.main')

@section('content')
    @component('components.slider', ['sliders'=>$sliders])
    @endcomponent
    @component('components.cards', ['cards'=>$cards])
    @endcomponent
    @component('components.text_image', ['posts'=>$posts])
    @endcomponent
@endsection



