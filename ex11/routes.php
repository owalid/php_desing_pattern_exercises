<?php
  function call($controller, $action) {
    require_once('controllers/' . ucfirst($controller) . 'Controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }
    // appeler la fonction associé a la route
    $controller->{ $action }();
  }
  
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show', 'create', 'delete']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }