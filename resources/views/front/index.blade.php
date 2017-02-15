@extends('front.template.main')

@section('content')
	<div class="jumbotron">
	  <h1>Laravel <small>Blog</small></h1>
	  <p>Versión 5.3</p>
	</div>

	<div class="row">
		<div class="col-md-9">
			<div class="row">
				@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								@foreach($article->images as $image)
									<img src="{{ asset('images/articles/'. $image->name) }}" class="img-article" alt="Imagen del Artículo {{ $article->title }}">
								@endforeach
								<a href="{{ route('front.view.article', $article->slug) }}">
									<h4 class="text-center">{{ $article->title }}</h4>
								</a>
								<hr>
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
								<div class="pull-right">
									<i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		<div class="col-md-3">
			@include('front.partials.aside')
		</div>
	</div>

	<!-- Create the pagination-->
	<div class="text-left">
		{!! $articles->render() !!}
	</div>
@endsection
