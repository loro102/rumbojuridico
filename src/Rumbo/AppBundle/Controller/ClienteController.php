<?php

namespace Rumbo\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Rumbo\AppBundle\Entity\Cliente;
use Rumbo\AppBundle\Form\ClienteType;

/**
 * Cliente controller.
 *
 */
class ClienteController extends Controller
{
    /**
     * Lists all Cliente entities.
     * Lista todos los clientes de forma ascendente con este formato: apellido1 apellido2, Nombre.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RumboAppBundle:Cliente')->findAllOrderedByNombre();//findBy(array(),array('nombre'=>'ASC','apellido1'=>'ASC','apellido2'=>'ASC'));

        return $this->render('RumboAppBundle:Cliente:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Cliente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Cliente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cliente_show', array('id' => $entity->getId())));
        }

        return $this->render('RumboAppBundle:Cliente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cliente entity.
     * Crea un formulario para añadir clientes.
     * @param Cliente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cliente $entity)
    {
        $form = $this->createForm(new ClienteType(), $entity, array(
            'action' => $this->generateUrl('cliente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cliente entity.
     * Muestra el formulario para crear nuevo cliente.
     *
     */
    public function newAction()
    {
        $entity = new Cliente();
        $form   = $this->createCreateForm($entity);

        return $this->render('RumboAppBundle:Cliente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cliente entity.
     * Encuentra y muestra un cliente existente.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Cliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cliente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RumboAppBundle:Cliente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cliente entity.
     * Muestra un formulario para editar clientes.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Cliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cliente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RumboAppBundle:Cliente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cliente entity.
    * Crea un formulario para editar clientes.
    *
    * @param Cliente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cliente $entity)
    {
        $form = $this->createForm(new ClienteType(), $entity, array(
            'action' => $this->generateUrl('cliente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cliente entity.
     * Edita un cliente existente.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RumboAppBundle:Cliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cliente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cliente_edit', array('id' => $id)));
        }

        return $this->render('RumboAppBundle:Cliente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cliente entity.
     * Borra un cliente existente.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RumboAppBundle:Cliente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cliente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cliente'));
    }

    /**
     * Creates a form to delete a Cliente entity by id.
     * Crea un formulario para borrar el cliente por id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cliente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Cliente'))
            ->getForm()
        ;
    }
}
