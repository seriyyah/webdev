@extends('layouts.app')
@section('title-block') Блог @endsection

@include('inc.nav2')

<style>

    .hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/blog/blog.head1.jpg");

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
      <h1>Блог</h1>
      <p>Здесь собраны все новости</p>
    </div>
  </div>

@section('content')


  <div class="row mb-2">

    @foreach ($posts as $post )
    @include('blog.post', ['post' => $post])

     @endforeach


  </div>
  {{ $posts->links() }}





@endsection

