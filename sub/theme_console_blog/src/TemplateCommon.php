<?php
namespace theme\console_blog;

trait TemplateCommon {

use TemplateFragments;

static public $style = [
  'font_color' => '#AAA',
  'background_color' => 'black',
  'highlight_font_color' => 'yellow',
  'box_background_color' => '#333',
  'box_font_color' => '#AAA',
  'box_highlight_font_color' => 'yellow',
  'font_normal' => "'Cutive Mono', monospace",
  'font_emph' => "'VT323', monospace"
];

function styles() {
  t__('style');
    \ephp\web\TemplatePage::style_layout();

    style('body', [
      'font-family' => self::$style['font_normal']
    ]);

    style('h1, h2, h3, h4, h5, h6', [
      'font-family' => self::$style['font_emph'],
      'font-weight' => 'unset'
    ]);

    style('p', [
      'line-height' => '1.5em'
    ]);

    style('a', [
      'cursor' => 'pointer',
      'text-decoration' => 'none',
      ':hover' => ['text-decoration' => 'underline']
    ]);

    style('hr', [
      'border' => 0,
      'border-bottom' => '1px dashed',
      'margin' => '3em 0'
    ]);

    style('.paragraph', [
      '> h2' => [
        'margin-bottom' => '0.5em',
        'text-decoration' => 'underline'
      ],
      ' a' => [
        'color' => self::$style['highlight_font_color'],
        'text_decoration' => 'none',
        ':hover' => ['text_decoration' => 'underline']
      ],
      '> pre' => [
        'color' => 'white',
        'font-family' => 'inherit',
        'border' => '1px solid',
        'padding' => '1em',
        'overflow' => 'hidden',
        'font-size' => '0.8em',
        'white-space' => 'pre-wrap'
      ],
      ' code' => ['color' => 'white', 'font-family' => 'inherit'],
      '> pre a' => ['color' => 'inherit', 'text-decoration' => 'none']
  ]);

  style('.container-padding', [
    'padding' => '1em'
  ]);

  style('.font-normal', [
    'font-family' => self::$style['font_normal']
  ]);

  style('.font-emph', [
    'font-family' => self::$style['font_emph'],
    'font-weight' => 'unset'
  ]);

  style('.box', [
    'background-color' => self::$style['box_background_color']
  ]);

  style('.box-hover', [
    ':hover' => [
      'color' => self::$style['background_color'],
      'background-color' => self::$style['highlight_font_color']
    ]  
  ]);

  style('.button', [
    'display' => 'block',
    'font-weight' => 'bold',
    'background-color' => self::$style['box_background_color'],
    'color' => self::$style['background_color'],
    'text-decoration' => 'none',
    'cursor' => 'pointer',
    'text-align' => 'center',
    ':hover' => ['background-color' => self::$style['highlight_font_color']],
    'padding' => '0.5em 0.7em'
  ]);
}

}

