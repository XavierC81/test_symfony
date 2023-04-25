<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController {
    public function index() {
        echo "Ca marche";
        die();
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"})
     */
    public function test($age) {
        return new Response("Vous avez $age ans !");
    }
}