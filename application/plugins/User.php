<?php

/**
 * Author: tangchunlinit@foxmail.com
 * Date: 31/01/2018
 * Time: 7:05 PM
 */
class UserPlugin extends Yaf\Plugin_Abstract
{
    public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::routerStartup($request, $response); // TODO: Change the autogenerated stub
    }

    public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::routerShutdown($request, $response); // TODO: Change the autogenerated stub
    }

    public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::dispatchLoopStartup($request, $response); // TODO: Change the autogenerated stub
    }

    public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::dispatchLoopShutdown($request, $response); // TODO: Change the autogenerated stub
    }

    public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::preDispatch($request, $response); // TODO: Change the autogenerated stub
    }

    public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        parent::postDispatch($request, $response); // TODO: Change the autogenerated stub
    }
}