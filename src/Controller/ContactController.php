<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contacts', name: 'contacts', methods: ['GET'])]
    public function listeContact(ContactRepository $repo): Response
    {
        $contacts = $repo->findAll();
        return $this->render('contact/listeContacts.html.twig', [
            'lesContacts' => $contacts,
        ]);
    }

    #[Route('/contact/{id}', name: 'ficheContact', methods: ['GET'])]
    public function ficheContact(Contact $contact): Response
    {
        return $this->render('contact/ficheContact.html.twig', [
            'leContact' => $contact,
        ]);
    }

    #[Route('/contacts/sexe/{sexe}', name: 'listeContactsSexe', methods: ['GET'])]
    public function listeContactsSexe($sexe , ContactRepository $repo): Response
    {
        // $contacts = $repo->findBy(
        //     ['sexe' => $sexe],
        //     ['nom' => 'ASC']
        // );
        $contacts = $repo->findBySexe($sexe);
        return $this->render('contact/listeContacts.html.twig', [
            'lesContacts' => $contacts,
        ]);
    }
}
