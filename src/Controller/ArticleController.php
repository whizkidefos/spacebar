<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

class ArticleController {
  /*
  @Route('/');
  */
  public function homepage() {
    return new Response("OMG... My first page already!!");
  }
}


?>
