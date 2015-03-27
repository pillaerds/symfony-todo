<?php

namespace Pillaerds\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
      //$em = $this->container->get('doctrine')->getManager();
      $em = $this->getDoctrine()->getManager();
      $repo = $em->getRepository('TodoBundle:Todo');
      $event = $repo->findOneBy(
        array(
          'id' => '3'
        ));
        return $this->render('PillaerdsTodoBundle:Default:index.html.twig', array('name' => $name));
    }
}
