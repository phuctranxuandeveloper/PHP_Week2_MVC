# controllers/pages_controller.php

<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'name' => 'Sang Beo',
      'age' => 22
    );
    include('./views/layouts/application.php');
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}
