<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Network\Session;
use Cake\Routing\Router;

/**
 * Role-Based Access Controll defined in standard ANSI INCITS 359-2004
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
    
    /**
     * This function creates a new session with a given user as owner, and a given set of active roles. 
     * The function is valid if and only if:
     * - the user is a member of the USERS data set, and
     * - the active role set is a subset of the roles authorized for that user.
     * 
     * @param type $user
     * @param type $session
     * @return boolean
     */
    public function createSession($user = null, $session = null){
        
        return true;   
    }

    /**
     * This function returns a Boolean value meaning whether the subject of a given session is allowed 
     * or not to perform a given operation on a given object. 
     * The function is valid if and only if the session identifier is a member of the SESSIONS data set, 
     * the object is a member of the OBJS data set, and the operation is a member of the OPS data set. 
     * The session’s subject has the permission to perform the operation on that object if and only 
     * if that permission is assigned to (at least) one of the session’s active roles.
     * 
     * @param type $session
     * @param type $operation
     * @param type $object
     * @return boolean
     */
    public function checkAccess($session = null, $operation = null, $object = null) {

        return false;
    }

    /**
     * This function returns the set of users authorized to a given role, i.e., the users that are 
     * assigned to a role that inherits the given role. 
     * The function is valid if and only if the given role is a member of the ROLES data set.
     * 
     * @param type $role
     */
    public function authorizedUsers($role) {
        
    }

    /**
     * This function returns the set of operations a given role is permitted to perform on a given object. 
     * The function is valid only if the role is a member of the ROLES data set, and the object 
     * is a member of the OBJS data set.
     * 
     * @param type $role
     * @param type $object
     * @return type
     */
    public function roleOperationsOnObject($role, $object) {
        
        return $operations;
    }

    /**
     * This function returns the set of roles authorized for a given user. 
     * The function is valid if and only if the user is a member of the USERS data set.
     * 
     * @param type $user
     */
    public function authorizedRoles($user) {
        
    }

    /**
     * This function returns the set of all permissions (op, obj), granted to or inherited by a given role. 
     * The function is valid if and only if the role is a member of the ROLES data set.
     * 
     * @param type $role
     */
    public function rolePermissions($role) {
        
    }

    /**
     * This function returns the set of permissions a given user gets through his/her authorized roles. 
     * The function is valid if and only if the user is a member of the USERS data set.
     *  
     * @param type $user
     */
    public function userPermissions($user) {
        
    }

}
