<?php
/**
 * Created by PhpStorm.
 * User: HP ENVY
 * Date: 11/4/2018
 * Time: 1:48 AM
 */

namespace Path\Controller;
load_class("Controller");
use Path\Controller;
use Path\Http\Request;
use Path\Http\Response;

class Songs
{
    public function __construct()
    {

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function Find(Request $request, Response $response){
        return $response->text("Hello world");
    }
    public function Delete(Request $request, Response $response){
        return $response->htmlString("<b>Delete user</b>",201);
    }

}