@extends('layouts.sample')

@section('title','ALL-MOVIE')
@section('main')
    @foreach ($movie['items'] as $item)
        <div class="movieBox">
          <a class="movieLink" href='https://www.youtube.com/watch?v={{$item["id"]}}'>
          <div class="image">
            <img src="{{$item["snippet"]["thumbnails"]["default"]["url"]}}" width="200" />
          </div>
            <div class="description">
              <div class="title">{{$item["snippet"]["title"]}}</div>
              {{$item["snippet"]["description"]}}
            </div>
          </a>
        </div>
    @endforeach
@endsection