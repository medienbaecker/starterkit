<?php

use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Uuid\Uuid;

class TestPage extends Page {

  public function children() {

    $pages = [];

    for ($i = 1; $i <= 50; $i++) {

      $pages[] = [
        'slug' => 'test-' . $i,
        'template' => 'default',
        'model' => 'default',
        'content' => [
          'title' => 'Subpage ' . $i,
          'uuid'  => Uuid::generate()
        ]
      ];

    }

    return Pages::factory($pages, $this);
    
  }

}

