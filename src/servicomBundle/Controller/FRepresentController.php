<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 07/08/2017
 * Time: 14:26
 */

namespace servicomBundle\Controller;


use FOS\UserBundle\Form\Type\ChangePasswordFormType;
use servicomBundle\Entity\FRepresent;
use servicomBundle\Form\FRepresentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Routing\Annotation\Route;


class FRepresentController extends Controller
{
    /**
     * @Route("/ProfileSettings", name="ProfileSettings")
     */
    public function profilSettingsAction(Request $request)
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $ProfileCommercial = $em->getRepository(FRepresent::class)->findOneBy(array('id' => $id ));

        $form = $this->createForm(ChangePasswordFormType::class,$ProfileCommercial );

        $form->handleRequest($request);
        if($form->isSubmitted() )
        {
            $em->persist($ProfileCommercial);
            $em->flush();
            return $this->redirect($this->generateUrl('servicom_default_index'));
        }
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        $event = new GetResponseUserEvent($user,$request);

        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);
        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.change_password.form.factory');
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_security_logout');
                $response = new RedirectResponse($url);
            }
           // $this->redirect('/logout');
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
            return $response;
        }
        return $this->render('@servicom/pages/profile_commercial.html.twig',array(

            'form'=>$form->createView(),
            'userf'=>$ProfileCommercial
        ));
    }

}