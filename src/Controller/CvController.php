<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route(
     *"/cv/{Name}/{LastName}/{age}/{section}",requirements={
//     * verifier si le nom commence par un caractere majuscule
     *"name":"[A-Z][a-z]+",
//     *verifier si le lastname commence par un caractere majuscule
     *"LastName":"[A-Z][a-z]+",
//     *verifier que l'age est entre 0 et 99
     *"age":"[0-9]{1,2}",
//   *verifier que la section est soit GL soit RT
     * "section":"RT|GL"},
     * defaults={
     *"Name":"Foulen",
     * "LastName":"Ben Foulen",
     * "age":"20",
     * "section":"RT",
     *"_format":"html", "_locale" : "fr|en"}
     *)
     */
    public function index($Name,$LastName,$age,$section): Response
    {
        return $this->render('cv/index.html.twig', [
            'Name' => $Name,
            'LastName'=>$LastName,
            'age'=>$age,
            'Section'=>$section
        ]);
    }
}
