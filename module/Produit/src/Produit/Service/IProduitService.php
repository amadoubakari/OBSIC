<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit\Service;

/**
 *
 * @author AMADOU BAKARI
 */
use Application\Entity\Produit;
use Application\Entity\Image;

interface IProduitService {

    public function addProduit(Produit $produit);

    public function getAllCategories();

    public function getProduitById($produitId);

    public function getUserById($userId);

    public function getProductByCode($codeProduit);
    
    public function saveImage(Image $image );
}
