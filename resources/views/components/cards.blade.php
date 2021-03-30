<br>
<div class="container">
    <div class="row">
        @foreach($cards as $card)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset($card->link)}}" class="card-img-top" alt="Não estou a funcionar, sorry">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center"> {{$card->title}} </h5>
                    <p class="card-text"> {{$card->description}} </p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
