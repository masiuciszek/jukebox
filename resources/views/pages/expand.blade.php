@extends('templates.base')
@section('content')

<div class="card d-flex flex-wrap d-lg-inline-block m-2" style="width: 560px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{!! $song->link !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title"><strong>{{ $song->author }}</strong>  -  {{ $song->name }}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt esse perspiciatis in quasi tempora corporis odit ipsa, fugit illum odio mollitia ea? Cum vero quo molestias ducimus voluptates libero atque.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Views: </b>{{ $song->views}}</li>
          <li class="list-group-item"><b>Video added at:</b> {{ $song->created_at }}</li>
        </ul>
        <div class="card-body">
          <p class="class-text"><b>Genre :</b>  <a href="#" class="card-link">{{ $song->genre }}</a></p>
          <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/songs/edit/{{$song->id}} "><button type="button" class="btn btn-primary">Edit</button></a>
                <a href="/songs/delete/{{$song->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
        </div>
      </div>
      </div>


@endsection