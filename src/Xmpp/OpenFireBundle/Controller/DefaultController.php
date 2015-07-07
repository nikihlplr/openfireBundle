<?php

namespace Xmpp\OpenFireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XmppOpenFireBundle:Default:index.html.twig', array('name' => $name));
    }
}
