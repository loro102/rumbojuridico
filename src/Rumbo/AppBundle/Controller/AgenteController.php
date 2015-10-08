<?php

namespace Rumbo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rumbo\AppBundle\Entity\Agente;
use Rumbo\AppBundle\Form\AgenteType;

class AgenteController extends Controller
{

    /**
     * Lista todos los agentes de forma ascendente por nombre comercial
     *
     **/
    public function indexAction($name)
    {
        $em=$this->getDoctrine()->getManager();
        $entities = $em->getRepository('RumboAppBundle:Agente')->findby(array(),array('nombre'=>'ASC'));

        return $this->render('RumboAppBundle:Agente:index.html.twig', array('entities' => $entities));
    }

    /**
     * Crea nuevo agente
     *
     **/
    public function crearAction(Request $request)
    {
        $entity = new Agente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('agente_show', array('id'=>$entity->getId())));


        }
        return $this->render('RumboAppBundle:Agente:nuevo.html.twig',array(
            'entity'=>$entity,
            'form'=>$form->createView(),
        ));

    }

}
