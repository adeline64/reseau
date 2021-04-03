<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
    * @Route("/", name="accueil")
    */
    public function index_utilisateurs(UtilisateurRepository $utilisateurRepository):Response 
    {
        $utilisateurs = $utilisateurRepository->findAll();
        return $this->render('accueil/index.html.twig', ['utilisateurs'=>$utilisateurs]);
    }
}
