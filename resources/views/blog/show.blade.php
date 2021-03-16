@extends('layouts.app')
@section('title-block'){{ $post->title }} @endsection


@include('inc.nav2')
<style>

    .hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/{{ $post->image }}");

  /* Set a specific height */
  height: 60%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
<div class="hero-image">
    <div class="hero-text">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->sub_title }}</p>
    </div>
  </div>

@section('content')

<section>
          <hr>


        <div class="blog-post">

          <p class="blog-post-meta">{{ $post->created_at->format('m, d, Y') }} Aвтор <a href="">{{ $post->author->name }}</a></p>

          <p>{!! $post->body !!}</p>
          <hr>
        </div>

</section>

@endsection

