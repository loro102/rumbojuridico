<?php

namespace Rumbo\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Rumbo\AppBundle\Entity\Siniestro;
use Rumbo\AppBundle\Entity\Cliente;
use Rumbo\AppBundle\Form\SiniestroType;

/**
 * Siniestro controller.
 *
 */
class SiniestroController extends Controller
{

    /**
     * Lists all Siniestro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RumboAppBundle:Siniestro')->findAll();

        return $this->render('RumboAppBundle:Siniestro:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Siniestro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Siniestro();
        //$id= $er->getRepository('RumboAppBundle:Cliente')->find($cliente);
        //->setCliente($id);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('siniestro_show', array('id' => $entity->getId())));
        }

        return $this->render('RumboAppBundle:Siniestro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Siniestro entity.
     *
     * @param Siniestro $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Siniestro $entity)
    {
        $form = $this->createForm(new SiniestroType(), $entity, array(
            'action' => $this->generateUrl('siniestro_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Siniestro entity.
     *
     */
    public function newAction($cliente)
    {
        $entity = new Siniestro($cliente);
        $id=$this->getDoctrine()->getManager();
        $persona=$id->getRepository('RumboAppBundle:Cliente')->find($cliente);
        $entity->setCliente($persona);
        $form   = $this->createCreateForm($entity);

        return $this->render('RumboAppBundle:Siniestro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Siniestro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Siniestro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Siniestro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RumboAppBundle:Siniestro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Siniestro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Siniestro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Siniestro entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RumboAppBundle:Siniestro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Siniestro entity.
    *
    * @param Siniestro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Siniestro $entity)
    {
        $form = $this->createForm(new SiniestroType(), $entity, array(
            'action' => $this->generateUrl('siniestro_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Siniestro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Siniestro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Siniestro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('siniestro_edit', array('id' => $id)));
        }

        return $this->render('RumboAppBundle:Siniestro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Siniestro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RumboAppBundle:Siniestro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Siniestro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('siniestro'));
    }

    /**
     * Creates a form to delete a Siniestro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('siniestro_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
