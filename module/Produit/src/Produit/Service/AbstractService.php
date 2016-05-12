<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit\Service;

/**
 * Description of AbstractService
 *
 * @author AMADOU BAKARI
 */
use Doctrine\ORM\EntityManager;

abstract class AbstractService {

    /**
     * @var \Doctrine\ORM\EntityManager L'entity manager
     */
    private $_em;

    /**
     * Constructeur
     * @param \Doctrine\ORM\EntityManager $em L'Entity manager
     * @param \Doctrine\ORM\EntityRepository $rep Le repository
     */
    public function __construct(EntityManager $em) {
        $this->_em = $em;
    }

    /**
     * Obtient l'entity manager
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEm() {
        return $this->_em;
    }

}
