<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * Display sheets, projects and managers
     * @Route("/")
     */
    public function dashboardAction(Request $request) {

	$entityManager = $this->container->get('doctrine.orm.entity_manager');

        $fiches = $entityManager->getRepository('AppBundle:Fiche')->findAll();
        $projects = $entityManager->getRepository('AppBundle:Projet')->findAll();
		$managers = $entityManager->getRepository('AppBundle:Manager')->findAll();

        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
	    'fiches' => $fiches,
	    'projets' => $projects,
	    'managers' => $managers,
        ]);
    }
}
