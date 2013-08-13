<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'api' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/api',
                    'defaults' => array(
                    ),
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'list' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route'    => '/deck[/][/:action][/][/:id][/]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'controller' => 'Api\Controller\Deck',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Api\Controller\Deck' => 'Api\Controller\DeckController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies'=> array(
            'ViewJsonStrategy',
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'Api\Form\Card' => 'Api\Form\Card',
            'Api\Form\CardFilter' => 'Api\Form\CardFilter',
            'Api\Mapper\Card' => 'Api\Mapper\Card',
            'Api\Entity\Card' => 'Api\Entity\Card',
        ),
        'factories' => array(
            'CardService' => 'Api\Service\Factory\CardServiceFactory',
        ),
    ),
);
