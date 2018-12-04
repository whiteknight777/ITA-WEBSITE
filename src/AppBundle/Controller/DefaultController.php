<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function welcomeAction(Request $request)
    {
        //Recherche des objets utilisateurs
        $em = $this->getDoctrine()->getManager();

        //Verification de l'existance d'un salarié en base
        $utilisateur = $this->getUser();

        if ($utilisateur == null) {
            return $this->redirect($this->generateUrl('accueil'));
        }
        if (in_array("ROLE_ADMIN", $utilisateur->getRoles())) {
            $this->addFlash(
                'success',
                "Bienvenue dans l'interface d'admin! M. " . $utilisateur->getUsername() . "."
            );
            return $this->redirect($this->generateUrl('admin_interface'));
        }

        return $this->redirect($this->generateUrl('accueil'));

    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueilAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 1;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\index.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/a-propos", name="apropos")
     */
    public function aProposAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 2;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\apropos.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/notre-histoire", name="notre_histoire")
     */
    public function notreHistoireAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 3;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\notreHistoire.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/notre-equipe", name="notre_equipe")
     */
    public function notreEquipeAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 4;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\notreEquipe.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/nos-activites", name="nos_activites")
     */
    public function activitesAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 5;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\activites.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/references", name="references")
     */
    public function referencesAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 6;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\references.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

    /**
     * @Route("/references/{id}", name="details_references")
     */
    public function detailsReferencesAction(Request $request, $id)
    {
        $utilisateur = $this->getUser();
        $page = 7;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\details_references.html.twig', array(
            'user' => $utilisateur,
            'page' => $page,
            'id' => $id,
        ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $page = 8;
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\contact.html.twig', array(
            'user' => $utilisateur,
            'page' => $page
        ));
    }

}
