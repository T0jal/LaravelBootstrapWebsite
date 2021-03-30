<br>
<div class="container">
    @component('components.jumbo')
    @endcomponent
</div>

    <div class="container">
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-3">
                <div style="padding-top: 12px; padding-bottom: 12px">
                    <img src="{{asset($gallery->link)}}" class="card-img-top" alt="...">
                </div>
            </div>
            @endforeach
        </div>
    </div>

<div class="container">
    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-3">
                <div style="padding-top: 12px; padding-bottom: 12px">
                    <img src="{{asset($gallery->link)}}" class="card-img-top" alt="...">
                </div>
            </div>
        @endforeach
    </div>
</div>
<br>
