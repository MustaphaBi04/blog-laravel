@extends('layout')

@section('header')
    <!-- header -->
    <header class="header" style=" background-image: url({{asset("images/photoblog.jpeg")}});">
      <div class="header-text">
        <h1>My Blog</h1>
        <h4>Dashboard of verified news...</h4>
      </div>
      <div class="overlay"></div>
    </header>
  
@endsection

@section('main')
    <!-- main -->
    <main class="container">
      <h2 class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        @foreach ($posts as $post )
        <div class="card-blog-content">
         <img src="{{asset($post->imagePath)}}" alt="pas d'image" />
         <p class="ph4">
           {{$post->created_at->diffForHumans()}}
           <span>Written By {{$post->user->name}}</span>
         </p>
         <h4>
           <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
         </h4>
       </div>
        @endforeach
      </section>
    </main>
@endsection