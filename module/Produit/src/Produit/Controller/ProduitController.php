<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit\Controller;

/**
 * Description of ProduitController
 *
 * @author AMADOU BAKARI
 */
use Zend\Mvc\Controller\AbstractActionController;
use Application\Entity\Produit;
use Zend\View\Model\ViewModel;
use DateTime;
use Application\Entity\Image;

session_start();

class ProduitController extends AbstractActionController {

    public function addAction() {
        $produitService = $this->getServiceLocator()->get('produitService');
        $this->layout('layout/connected');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $produit = new Produit();
            $codeProduit = uniqid('PC');
            $produit->setCode($codeProduit);
            $produit->setCategorie($produitService->getProduitById($request->getPost('categorie')));
            $produit->setNom($request->getPost('nom'));
            $produit->setMarque($request->getPost('marque'));
            $produit->setDateEnregistrement(new DateTime($request->getPost('dateEnregistrement')));
            $produit->setDateFabrication(new DateTime($request->getPost('dateFabrication')));
            $produit->setDatePeremption(new DateTime($request->getPost('datePeremption')));
            $produit->setPrixAchat($request->getPost('prixAchat'));
            $produit->setPrixVente($request->getPost('prixVente'));
            $produit->setUser($produitService->getUserById($_SESSION['utilisateur']));
            $produitService->addProduit($produit);

            $tabImages = $request->getPost('images');
            $result = $produitService->getProductByCode($codeProduit);
            if ($tabImages != NULL) {
                foreach ($tabImages as $image) {
                    $image = new Image();
                    $image->setNom($image);
                    $image->setProduit($produitService->getProduitById(1));
                    $produitService->saveImage($image);
                }
            }
        }

        return new ViewModel(array('categories' => $produitService->getAllCategories()));
    }

    public function deleteAction() {
        
    }

}
