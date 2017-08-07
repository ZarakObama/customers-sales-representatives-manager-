<?php

namespace servicomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }else {

            $em=$this->getDoctrine()->getManager();
            $userf=$em->getRepository("servicomBundle:FRepresent")->findOneBy(array('id' => $id ));

            return $this->render('servicomBundle:Default:index.html.twig',array("userf"=>$userf));
        }

    }

    public function baseAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }else {
            $em=$this->getDoctrine()->getManager();
            $userf=$em->getRepository("servicomBundle:FRepresent")->findOneBy(array('id' => $id ));
            return $this->render('base.html.twig',array("userf"=>$userf));
        }

    }
}
