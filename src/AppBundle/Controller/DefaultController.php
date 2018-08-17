<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * 
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
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        // replace this example code with whatever you need
        return $this->render('default\index.html.twig', array(
            'user' => $utilisateur
        ));
    }

}
