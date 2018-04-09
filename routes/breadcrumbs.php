<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Configuracion
Breadcrumbs::register('ajustes', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Ajustes', route('ajustes'));
});

// Home > Pacientes > Listar
Breadcrumbs::register('list-pacientes', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Pacientes / Listar', route('list-pacientes'));
});

// Home > Blog
Breadcrumbs::register('blog', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('category', $post->category);
    $breadcrumbs->push($post->title, route('post', $post));
});
