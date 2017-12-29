<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/classe')) {
            // classe_index
            if ('/classe' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_classe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'classe_index');
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe_index',);
            }
            not_classe_index:

            // classe_new
            if ('/classe/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_classe_new;
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }
            not_classe_new:

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_classe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'ClassBundle\\Controller\\ClasseController::showAction',));
            }
            not_classe_show:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_classe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'ClassBundle\\Controller\\ClasseController::editAction',));
            }
            not_classe_edit:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_classe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'ClassBundle\\Controller\\ClasseController::deleteAction',));
            }
            not_classe_delete:

        }

        // class_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'class_default_index');
            }

            return array (  '_controller' => 'ClassBundle\\Controller\\DefaultController::indexAction',  '_route' => 'class_default_index',);
        }

        if (0 === strpos($pathinfo, '/intervenant')) {
            // intervenant_index
            if ('/intervenant' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_intervenant_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intervenant_index');
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\IntervenantController::indexAction',  '_route' => 'intervenant_index',);
            }
            not_intervenant_index:

            // intervenant_new
            if ('/intervenant/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_intervenant_new;
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\IntervenantController::newAction',  '_route' => 'intervenant_new',);
            }
            not_intervenant_new:

            // intervenant_show
            if (preg_match('#^/intervenant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_intervenant_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_show')), array (  '_controller' => 'ClassBundle\\Controller\\IntervenantController::showAction',));
            }
            not_intervenant_show:

            // intervenant_edit
            if (preg_match('#^/intervenant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_intervenant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_edit')), array (  '_controller' => 'ClassBundle\\Controller\\IntervenantController::editAction',));
            }
            not_intervenant_edit:

            // intervenant_delete
            if (preg_match('#^/intervenant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_intervenant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_delete')), array (  '_controller' => 'ClassBundle\\Controller\\IntervenantController::deleteAction',));
            }
            not_intervenant_delete:

        }

        elseif (0 === strpos($pathinfo, '/student')) {
            // student_index
            if ('/student' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_student_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'student_index');
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\StudentController::indexAction',  '_route' => 'student_index',);
            }
            not_student_index:

            // student_new
            if ('/student/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_student_new;
                }

                return array (  '_controller' => 'ClassBundle\\Controller\\StudentController::newAction',  '_route' => 'student_new',);
            }
            not_student_new:

            // student_show
            if (preg_match('#^/student/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_student_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_show')), array (  '_controller' => 'ClassBundle\\Controller\\StudentController::showAction',));
            }
            not_student_show:

            // student_edit
            if (preg_match('#^/student/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_student_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_edit')), array (  '_controller' => 'ClassBundle\\Controller\\StudentController::editAction',));
            }
            not_student_edit:

            // student_delete
            if (preg_match('#^/student/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_student_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'ClassBundle\\Controller\\StudentController::deleteAction',));
            }
            not_student_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
