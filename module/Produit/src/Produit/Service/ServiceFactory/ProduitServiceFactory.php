<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit\Service\ServiceFactory;

/**
 * Description of ProduitServiceFactory
 *
 * @author AMADOU BAKARI
 */
use Zend\ServiceManager\FactoryInterface;
use Produit\Service\ProduitService;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProduitServiceFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        //$personnelRepository = $entityManager->getRepository('Application\Entity\Compte');

        return new ProduitService($entityManager);
    }

}
