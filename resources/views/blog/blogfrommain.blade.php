<div class="blog-item-wrapper" style="margin-right: 2px;">
    <div class="blog-item-img">
      <a href="/post/{{ $post->slug }}">
        <img src="/storage/{{ $post->image }}" alt="">
      </a>
    </div>
    <div class="blog-item-text">
      <div class="meta-tags">
        <span class="date"><i class="lnr  lnr-clock"></i>{{ $post->created_at->format('m, d') }}</span>
        <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
      </div>
      <h3>
        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
      </h3>
      <p>
      {{ $post->excerpt }}...
      </p>
      <a href='/post/{{ $post->slug }}' class="btn-rm">Читать дальше <i class="lnr lnr-arrow-right"></i></a>
    </div>
  </div>
