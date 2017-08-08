<?php

namespace servicomBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class FComptetController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    /**
     * @Route("/client_list",name="client_list")
     */
    public function clientList(Request $request)
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();


        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        else {    $em=$this->getDoctrine()->getManager();

            $reno=$em->getRepository("servicomBundle:FRepresent")->findOneBy(array('id' => $id ));
            $list=$em->getRepository("servicomBundle:FComptet")->findBy(array('ctReNo' => $reno ));
$count=count($list);


            return $this->render('servicomBundle:pages:client_list.html.twig',array("reno"=>$list,"userf"=>$reno,"count"=>$count));
        }

    }
    /**
     * @Route("/client_profil/{idx}",name="client_profil")
     */
    public function clientProfil(Request $request,$idx)
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();


        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        else {    $em=$this->getDoctrine()->getManager();

            $reno=$em->getRepository("servicomBundle:FRepresent")->findOneBy(array('id' => $id ));
            $list=$em->getRepository("servicomBundle:FComptet")->findOneBy(array('id' => $idx ));



            return $this->render('servicomBundle:pages:client_profil.html.twig',array("client"=>$list,"userf"=>$reno));
        }

    }
}
