<?php
return function($site, $pages, $page) {

  // fetch the basic set of pages
  $posts = $page->children()->flip();

  // add the tag filter
  if($tag = param('tag')) {
    $posts = $posts->filterBy('tags', $tag, ',');
  }

  // fetch all tags
  $tags = $posts->pluck('tags', ',', false);

  // apply pagination
  $posts   = $posts->paginate(10);
  $pagination = $posts->pagination();

  return compact('posts', 'tags', 'tag', 'pagination');

};