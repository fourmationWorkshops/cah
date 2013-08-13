<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api\Controller;

use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;

class DeckController extends AbstractRestfulController
{
    public function indexAction()
    {

    }

    public function getList()
    {
        return new JsonModel(array('test' => 'val'));
    }

    public function get($id)
    {

        $service = $this->getServiceLocator ()->get ( 'CardService' );


        return new JsonModel();
    }

    public function create($data)
    {
        return new JsonModel();
    }

    public function delete($id)
    {
        return new JsonModel();
    }

    public function update($id, $data)
    {
        return new JsonModel();
    }
}
