@extends('front.template.main')

@section('title', $article->title)

@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="left">{{ $article->title }}</h3>
						<a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
					</div>
					<div class="panel-body">
						<div class="thumbnail">
							@foreach($article->images as $image)
								<img src="{{ asset('images/articles/'. $image->name) }}" class="img-article" alt="Imagen del Artículo {{ $article->title }}">
							@endforeach
						</div>
						{!! $article->content !!}
						<hr>
						@foreach($article->tags as $tag)
							<span class="label label-default"><a href="{{ route('front.search.tag', $tag->name) }}" class="article-tag">{{ $tag->name }}</a></span>
						@endforeach
					</div>
					<div class="panel-footer">
						<h5 class="text-right">Comentarios</h5>
					</div>
					<div class="panel-body">
						<div id="disqus_thread"></div>
							<script>
								/**
								*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
								*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
								/*
								var disqus_config = function () {
								this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
								this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
								};
								*/
								(function() { // DON'T EDIT BELOW THIS LINE
								var d = document, s = d.createElement('script');
								s.src = '//blog-cl8thlaext.disqus.com/embed.js';
								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
								})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			@include('front.partials.aside')
		</div>
	</div>
@endsection
