<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'classe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\ClasseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\ClasseController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\ClasseController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/classe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\ClasseController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/classe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\ClasseController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/classe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'class_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intervenant_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\IntervenantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intervenant/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intervenant_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\IntervenantController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intervenant/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intervenant_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\IntervenantController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intervenant_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\IntervenantController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intervenant_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\IntervenantController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\StudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\StudentController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\StudentController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\StudentController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ClassBundle\\Controller\\StudentController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
