<?php

namespace App\Controllers;

use App\Controllers\Controller;

class SiteController extends Controller
{
    public function bugsDisease($request, $response, $args)
    {
        return $this->view->render($response, 'bugs-disease.twig');
    }
    public function connect($request, $response, $args)
    {
        return $this->view->render($response, 'connect.twig');
    }
    public function faq($request, $response, $args)
    {
        return $this->view->render($response, 'faq.twig');
    }
    public function franchiseOpprtunities($request, $response, $args)
    {
        return $this->view->render($response, 'franchise-opprtunities.twig');
    }
    public function services($request, $response, $args)
    {
        return $this->view->render($response, 'services.twig');
    }
    public function residential($request, $response, $args)
    {
        return $this->view->render($response, 'residential-mosquito-control-treatment.twig');
    }
    public function natural($request, $response, $args)
    {
        return $this->view->render($response, 'all-natural-mosquito-control.twig');
    }
    public function outdoor($request, $response, $args)
    {
        return $this->view->render($response, 'outdoor-event-spray.twig');
    }
    public function commercial($request, $response, $args)
    {
        return $this->view->render($response, 'commerciall-mosquito-control.twig');
    }
}