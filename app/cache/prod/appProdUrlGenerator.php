<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'tasklist_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::logAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/log',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_complete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskController::completeAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/complete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TaskListBundle\\Controller\\TaskListController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
