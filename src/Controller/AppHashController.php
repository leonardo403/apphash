<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Apphash;

class AppHashController extends AbstractController
{
    /**
     * @Route("/app/hash/{string}", methods={"GET"}, name="app_hash")
     */
    public function hash(string $string): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if ($string == null) {
            throw new Exception("Error statement");
        }
        
        $stringhash = '0000';
        $hashGerada = $stringhash . md5($string);

        $appHash = new Apphash();
        $appHash->setString($string);
        $appHash->setHashGerada($hashGerada);
        $appHash->setHash(substr($hashGerada, 4));
        $appHash->setDataCriacao(new \DateTime('now'));

        $entityManager->persist($appHash);
        
        $entityManager->flush();

        return $this->json([
            'MD5' => $hashGerada 
        ]);
    }
}
