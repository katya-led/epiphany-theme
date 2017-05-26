<?php

$posts = [
    'category' => [
      'post_type' => 'post',
      'order'     => 'date',
      'posts_per_page' => 2
    ]

];

foreach ($posts as $key => $value) {
  $$key= new WP_Query( $value );
  # code...
}

?>