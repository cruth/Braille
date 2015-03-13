<?php

namespace EPFC\Bundle\BrailleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \EPFC\Bundle\BrailleBundle\Entity\Book;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $book = new Book();
        $book->setTitre("Ubik");
        $book->setAuteur("Philip K. Dick");
        $book->setEdition("Poche");
        $book->setCategorieId(1);
        $book->setDescriptionId(2);
        $book->setImageId(5);
        $book->setPublicId(14);
        $book->setSlug("test");
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($book);
        $em->flush();
        
        return new Response('Livre crée avec l\'id '.$book->getId());
        //return $this->render('EPFCBrailleBundle:Default:index.html.twig', array('name' => $name));
    }
}
