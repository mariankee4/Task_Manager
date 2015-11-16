<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // tasklist_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasklist_default_index')), array (  '_controller' => 'TaskListBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/task')) {
            // task
            if (rtrim($pathinfo, '/') === '/task') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'task');
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::indexAction',  '_route' => 'task',);
            }
            not_task:

            // task_log
            if ($pathinfo === '/task/log') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task_log;
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::logAction',  '_route' => 'task_log',);
            }
            not_task_log:

            // task_create
            if ($pathinfo === '/task/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_task_create;
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::createAction',  '_route' => 'task_create',);
            }
            not_task_create:

            // task_new
            if ($pathinfo === '/task/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task_new;
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::newAction',  '_route' => 'task_new',);
            }
            not_task_new:

            // task_show
            if (preg_match('#^/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_show')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::showAction',));
            }
            not_task_show:

            // task_edit
            if (preg_match('#^/task/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::editAction',));
            }
            not_task_edit:

            // task_update
            if (preg_match('#^/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_task_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_update')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::updateAction',));
            }
            not_task_update:

            // task_delete
            if (preg_match('#^/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_task_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::deleteAction',));
            }
            not_task_delete:

            // task_complete
            if (preg_match('#^/task/(?P<id>[^/]++)/complete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_task_complete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_complete')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskController::completeAction',));
            }
            not_task_complete:

        }

        if (0 === strpos($pathinfo, '/list')) {
            // list
            if (rtrim($pathinfo, '/') === '/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_list;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'list');
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::indexAction',  '_route' => 'list',);
            }
            not_list:

            // list_create
            if ($pathinfo === '/list/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_list_create;
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::createAction',  '_route' => 'list_create',);
            }
            not_list_create:

            // list_new
            if ($pathinfo === '/list/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_list_new;
                }

                return array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::newAction',  '_route' => 'list_new',);
            }
            not_list_new:

            // list_show
            if (preg_match('#^/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_list_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_show')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::showAction',));
            }
            not_list_show:

            // list_edit
            if (preg_match('#^/list/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_list_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_edit')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::editAction',));
            }
            not_list_edit:

            // list_update
            if (preg_match('#^/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_list_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_update')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::updateAction',));
            }
            not_list_update:

            // list_delete
            if (preg_match('#^/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_list_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_delete')), array (  '_controller' => 'TaskListBundle\\Controller\\TaskListController::deleteAction',));
            }
            not_list_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
