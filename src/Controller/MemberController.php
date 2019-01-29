<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Membre;

class MemberController extends AbstractController
{
    public function showAllMembers(EntityManagerInterface $em )
    {
        //$em = $this->getDoctrine()->getManager();
        $membersRepository = $em->getRepository(Membre::class)->findAll();

        return $this->render('membres/liste-detail-page01.html.twig',[
            'members' => $membersRepository
        ]);
    }

    public function showMember( Membre $member){
        
        return $this->render('membres/liste-detail-page02.html.twig', [
            'member' => $member
        ]);
    }

}