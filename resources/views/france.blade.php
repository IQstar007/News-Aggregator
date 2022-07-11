@extends('index')
@section('menu')
@foreach ($index as $index)
<li class="nav-item">
    <a class="" href="{{url($index->name)}}">{{$index->name}}</a>
  </li>
@endforeach
@endsection
@section('berita')
@foreach ($index2 as $index2)
<div class="col-lg-4 col-md-6 col-12">
    <!-- Single News -->
    <div class="single-news">
      <div class="image">
        <a href="{{$index2 -> source_url}}"><img class="thumb" src="{{$index2 -> img_url}}" alt="Blog" /></a>
        <div class="meta-details">
          <img class="thumb" src="{{ asset('assets/images/blog/b6.jpg') }}" alt="Author" />
          <span>BY 8ball</span>
        </div>
      </div>
      <div class="content-body">
        <h4 class="title">
          <a href="{{$index2 -> source_url}}"> {{$index2->title}}</a>
        </h4>
        <p>
            {{$index2->description}}
        </p>
      </div>
    </div>
    <!-- End Single News -->
  </div>
@endforeach

@endsection
