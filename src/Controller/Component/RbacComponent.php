<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Network\Session;
use Cake\Routing\Router;

/**
 * 
 */
class RbacComponent extends Component {

    /**
     * Request object
     *
     * @var \Cake\Network\Request
     */
    public $request;

    /**
     * Response object
     *
     * @var \Cake\Network\Response
     */
    public $response;

    /**
     * Instance of the Session object
     *
     * @var \Cake\Network\Session
     */
    public $session;

    /**
     * 
     * @param array $config
     */
    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->eventManager($controller->eventManager());
        $this->response = & $controller->response;
        $this->session = $controller->request->session();
    }

}
