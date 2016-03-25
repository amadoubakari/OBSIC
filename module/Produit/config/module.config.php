<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Produit;

return array(
    //ajouter les contrôleurs
    'controllers' => array(
        'invokables' => array(
            'Produit\Controller\Produit ' => 'Produit\Controller\ProduitController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'produit' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/produit',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Produit\Controller',
                        'controller' => 'Produit',
                        'action' => 'add',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/:controller[/:action[/:id]]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'produit' => __DIR__ . '/../view'
        ),
        'display_exceptions' => true,
    ),
);
