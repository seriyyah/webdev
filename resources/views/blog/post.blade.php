  <div class="row featurette">
    <div class="col-md-7">
        <a href="/post/{{ $post->slug }}" style="color: black;">
      <h2 class="featurette-heading"> <span class="text-muted">{{ $post->title }}</span></h2>
        </a>
        <p class="card-text"><small class="text-muted">{{ $post->created_at->format('m, d') }}</small></p>
      <p class="lead">{{ $post->excerpt }}</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src='/storage/{{ $post->image }}' alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">
