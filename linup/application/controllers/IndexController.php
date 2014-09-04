<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    /*	if(Zend_Auth :: getInstance()->hasIdentity()) {
    		return $this->_helper->redirector->goToRoute(array (
    				'controller' => 'sip',
    				'action' => 'index'
    		), null, true);
    	}*/
    }

    public function indexAction()
    {
    	echo "TESTE";
     }


}

