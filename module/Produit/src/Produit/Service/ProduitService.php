<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit\Service;

/**
 * Description of ProduitService
 *
 * @author AMADOU BAKARI
 */
use Application\Entity\Produit;
use Application\Entity\Image;

class ProduitService extends AbstractService implements IProduitService {

    public function addProduit(Produit $produit) {
        $this->getEm()->persist($produit);
        $this->getEm()->flush();
    }

    public function getAllCategories() {
        return $this->getEm()->getRepository('Application\Entity\Categorie')->findBy(array('statut' => '1'), array('nom' => 'ASC'));
    }

    public function getProduitById($produitId) {
        return $this->getEm()->find('Application\Entity\Categorie', $produitId);
    }

    public function getUserById($userId) {
        return $this->getEm()->find('Application\Entity\User', $userId);
    }

    public function getProductByCode($codeProduit) {
        return $this->getEm()->getRepository('Application\Entity\Produit')->findBy(array('code' => $codeProduit), NULL, 1);
    }

    public function saveImage(Image $image) {
        $this->getEm()->persist($image);
        $this->getEm()->flush();
    }

}
