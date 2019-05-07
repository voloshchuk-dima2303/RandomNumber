<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RandomNumber;
use Symfony\Component\HttpFoundation\Response;
use App\Service\GenerateRandomNumber\GeneratePrimeNumber;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

class RandomNumberController extends FOSRestController
{
    /**
     * @Rest\Get("/generate", name="generate")
     */
    public function generate(GeneratePrimeNumber $generatePrimeNumber)
    {
        $number = $generatePrimeNumber->generate();

        $em = $this->getDoctrine()->getManager();

        $randomNumber = new RandomNumber($number);

        $em->persist($randomNumber);

        $em->flush();

        return View::create($randomNumber, Response::HTTP_CREATED , []);
    }

    /**
     * @Rest\Get("/retrieve/{id<\d+>}", name="retrieve")
     */
    public function retrieve(RandomNumber $randomNumber)
    {
        return View::create($randomNumber, Response::HTTP_OK , []);
    }
}