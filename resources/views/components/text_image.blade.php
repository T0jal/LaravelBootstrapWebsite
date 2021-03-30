<br>
@foreach($posts as $post)
    @if(($loop->index)%2==0)
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p>{{$post->description}}</p>
                </div>
                <div class="col-6">
                    <img src="{{asset($post->link)}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{asset($post->link)}}" class="d-block w-100" alt="...">
            </div>
            <div class="col-6">
                <p>{{$post->description}}</p>
            </div>
        </div>
    </div>
    @endif
@endforeach
