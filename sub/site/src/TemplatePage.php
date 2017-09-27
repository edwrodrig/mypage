<?php

namespace edwin\web;

class TemplatePage extends \theme\console_blog\TemplatePage {

function __construct($metadata = []) {
  parent::__construct($metadata);
}

function fragment_nav() {
  $links = [
    ['href' => url('/posts.html'), 'content' => tr(['es' => 'Artículos', 'en' => 'Posts'])],
    ['href' => url('/projects.html'), 'content' => tr(['es' => 'Proyectos', 'en' => 'Projects'])]
  ];

  foreach ( $links as $link ) {
    $this->fragment_nav_item($link);
  }

}

function footer_section_social_buttons() {
  $social_buttons = [
  ['http://www.github.com/edwrodrig', 'github.png'],
  ['http://www.linkedin.com/pub/edwin-iv%C3%A1n-rodr%C3%ADguez-le%C3%B3n/35/241/848', 'linkedin.png'],
  ['http://play.google.com/store/apps/developer?id=edwrodrig', 'google-play.png'],
  ['http://edwrodrig.deviantart.com/', 'deviantart.png'],
  ['https://twitter.com/edwrodrig', 'twitter.png'],
  ['http://www.pinterest.com/edwrodrig', 'pinterest.jpg'],
  ['http://www.codepen.io/edwrodrig', 'codepen.png'],
  ['https://www.youtube.com/user/edwrodrig1', 'youtube.png']
];
  $tag = tag('a', ['style' => [
    'display' => 'block',
    'bg-cover' => true,
    'width' => '50px',
    'height' => '50px'
  ]]);

  t__(['class' => 
    [
      'layout' => 'row-center',
      '> *' => ['margin' => '0.5em']
    ]
  ]);
  foreach ( $social_buttons as $button ) {
    tag($tag, ['href' => $button[0], style(['bg-img' => url(sprintf('/img/icons/%s', $button[1]))])])();
  }
  __t();
}

function footer($content) {
  $this->footer_section_social_buttons();
  tag([style(['margin' => '0.5em','align' => 'center'])])(sprintf('%s - Edwin Rodríguez',  date("Y")));
}

}
