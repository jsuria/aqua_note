<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     *
     * @param $genusName
     * @return Response
     *
     * @throws \Twig_Error
     */
    public function showAction($genusName)
    {
        // Use templating
        // Symfony's services are inside a container
        /*
         // LONG METHOD
        $templating = $this->container->get('templating');
        $html = $templating->render(
            'genus/show.html.twig',
            [
                'name' => $genusName
            ]
        );
        */

        $notes = [
            "She sells sea shells by the sea shore.",
            "How much wood can a woodchuck chuck if a woodchuck could chuck wood",
            "Imagine an imaginary manager imagining an imaginary menagerie"
        ];
        // SHORTCUT
        return $this->render(
            'genus/show.html.twig',
            [
                'name'  => $genusName,
                'notes' => $notes
            ]
        );
    }
}
