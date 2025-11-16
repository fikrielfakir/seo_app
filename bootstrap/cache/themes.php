<?php

/*
|--------------------------------------------------------------------------
| Cache Themes
|--------------------------------------------------------------------------
|
| igaster/laravel-theme reads themes settings from json files inside
| each theme's folder. We will cache them in a single php file to
| avoid searching the filesystem for each Request. You can use
| 'theme:refresh-cache' to rebuild cache, or set config/themes.php
| 'cache' setting to false to disable completely
|
*/

return array (
  0 => 
  array (
    'name' => 'admin',
    'asset-path' => 'themes/admin',
    'extends' => 'default',
    'category' => 'admin',
    'require' => '1.0.0',
    'description' => 'DotArtisan default admin theme for Monster Tools.',
    'version' => '1.0.0',
    'views-path' => 'admin',
  ),
  1 => 
  array (
    'name' => 'canvas',
    'asset-path' => 'themes/canvas',
    'extends' => 'default',
    'category' => 'front',
    'require' => '1.0.0',
    'version' => '3.0.0',
    'author' => 'DotArtisan',
    'website' => 'https://bcstatic.freshdesk.com',
    'screenshot' => 'themes/canvas/images/screenshot.png',
    'title' => 'Canvas',
    'description' => 'Monster tools defaul theme for Monster Tools.',
    'defaults' => 
    array (
      'light' => 
      array (
        'primary_color' => '#FA8617',
        'secondary_color' => '#26282D',
        'background_color' => '#F2F3F4',
        'border_color' => '#E8E8E8',
        'body_color' => '#212529',
      ),
      'dark' => 
      array (
        'primary_color' => '#1A1927',
        'secondary_color' => '#232230',
        'body_text_color' => '#dbdbdb',
        'border_color' => '#272634',
        'main_text_color' => '#777777',
      ),
      'body_font_size' => '.875rem',
      'h1_font_size' => '1.5rem',
      'h2_font_size' => '1.25rem',
      'h3_font_size' => '1.125rem',
      'h4_font_size' => '1rem',
      'h5_font_size' => '1.09375rem',
      'h6_font_size' => '0.875rem',
      'body_line_height' => '1.5',
      'body_font_family' => 'Inter',
      'heading_font_family' => 'Inter',
      'body_font_variant' => '400;500;600;700;800',
      'heading_font_variant' => '400;500;600;700;800',
    ),
    'views-path' => 'canvas',
  ),
  2 => 
  array (
    'name' => 'default',
    'asset-path' => 'themes/default',
    'extends' => '',
    'category' => NULL,
    'require' => NULL,
    'description' => 'Require default theme, every theme must extend the default theme in order to access static and common resources.',
    'version' => NULL,
    'views-path' => 'default',
  ),
  3 => 
  array (
    'name' => 'minimal',
    'asset-path' => 'themes/minimal',
    'extends' => 'default',
    'category' => 'front',
    'require' => '3.0.0',
    'version' => '1.0.0',
    'author' => 'DotArtisan',
    'website' => 'https://bcstatic.freshdesk.com',
    'screenshot' => 'themes/minimal/images/screenshot.png',
    'title' => 'Minimal',
    'description' => 'Premium Minimal theme for MonsterTools.',
    'defaults' => 
    array (
      'light' => 
      array (
        'primary_color' => '#FA8617',
        'secondary_color' => '#26282D',
        'background_color' => '#F2F3F4',
        'border_color' => '#E8E8E8',
        'body_color' => '#212529',
      ),
      'dark' => 
      array (
        'primary_color' => '#1A1927',
        'secondary_color' => '#232230',
        'body_text_color' => '#dbdbdb',
        'border_color' => '#272634',
        'main_text_color' => '#777777',
      ),
      'body_font_size' => '.875rem',
      'h1_font_size' => '1.5rem',
      'h2_font_size' => '1.25rem',
      'h3_font_size' => '1.125rem',
      'h4_font_size' => '1rem',
      'h5_font_size' => '1.09375rem',
      'h6_font_size' => '0.875rem',
      'body_line_height' => '1.5',
      'body_font_family' => 'Inter',
      'heading_font_family' => 'Inter',
      'body_font_variant' => '400;500;600;700;800',
      'heading_font_variant' => '400;500;600;700;800',
    ),
    'views-path' => 'minimal',
  ),
);