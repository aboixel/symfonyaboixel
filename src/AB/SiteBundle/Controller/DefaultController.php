<?php


namespace AB\SiteBundle\Controller;

use AB\SiteBundle\Entity\Image;
use AB\SiteBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AB\SiteBundle\Entity\Contact;


class DefaultController extends Controller
{
  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    return $this->render('ABSiteBundle:Default:index.html.twig');
	}
  

public function contactAction(Request $request)
{   
    $contact = new contact();

    $formBuilder = $this->get('form.factory')->createBuilder('form', $contact);

    $formBuilder
      ->add('nom',      'text')
      ->add('email',     'text')
      ->add('sujet',   'text')
      ->add('message',    'textarea')
      ->add('envoyer',      'submit')
    ;

    $form = $formBuilder->getForm();
 $form->handleRequest($request);

    if ($form->isValid()) 
	{
	$data = $request->request->get('form');
    $data['email'];
	
    $message = \Swift_Message::newInstance()
        ->setSubject('Audrey Boixel a bien reçu votre message')
        ->setFrom('a.boixel@gmail.com')
        ->setFrom($data['email'])
        ->setBody($this->renderView('ABSiteBundle:Default:contactEmail.txt.twig', array('contact' => $contact)))
    ;
    $this->get('mailer')->send($message);
	
      $em = $this->getDoctrine()->getManager();
      $em->persist($contact);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Message bien envoyé!');
	  
      return $this->redirect($this->generateUrl('ab_site_contact'));
	}
    return $this->render('ABSiteBundle:Default:contact.html.twig', array(
      'form' => $form->createView(),
    ));
  }

}