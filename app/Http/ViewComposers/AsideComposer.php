<?php

namespace App\Http\ViewComposers;

use Iluminate\Contracts\View\View;
use App\Category;
use App\Tag;

class AsideComposer {

	public function compose($view)
	{
		$categories = Category::orderBy('name', 'ASC')->get();
		$tags = tag::orderBy('name', 'ASC')->get();
		$view->with('categories', $categories)->with('tags', $tags);
	}

}
