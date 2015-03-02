<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/c734522')) {
            // _assetic_c734522
            if ($pathinfo === '/css/c734522.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c734522',);
            }

            if (0 === strpos($pathinfo, '/css/c734522_part_1_bootstrap')) {
                if (0 === strpos($pathinfo, '/css/c734522_part_1_bootstrap-theme')) {
                    // _assetic_c734522_0
                    if ($pathinfo === '/css/c734522_part_1_bootstrap-theme_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c734522_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/c734522_part_1_bootstrap-theme.')) {
                        // _assetic_c734522_1
                        if ($pathinfo === '/css/c734522_part_1_bootstrap-theme.css_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c734522_1',);
                        }

                        // _assetic_c734522_2
                        if ($pathinfo === '/css/c734522_part_1_bootstrap-theme.min_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c734522_2',);
                        }

                    }

                }

                // _assetic_c734522_3
                if ($pathinfo === '/css/c734522_part_1_bootstrap_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c734522_3',);
                }

                if (0 === strpos($pathinfo, '/css/c734522_part_1_bootstrap.')) {
                    // _assetic_c734522_4
                    if ($pathinfo === '/css/c734522_part_1_bootstrap.css_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c734522_4',);
                    }

                    // _assetic_c734522_5
                    if ($pathinfo === '/css/c734522_part_1_bootstrap.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c734522',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_c734522_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/63a2f85')) {
            // _assetic_63a2f85
            if ($pathinfo === '/js/63a2f85.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '63a2f85',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_63a2f85',);
            }

            if (0 === strpos($pathinfo, '/js/63a2f85_part_1_')) {
                if (0 === strpos($pathinfo, '/js/63a2f85_part_1_bootstrap')) {
                    // _assetic_63a2f85_0
                    if ($pathinfo === '/js/63a2f85_part_1_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '63a2f85',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_63a2f85_0',);
                    }

                    // _assetic_63a2f85_1
                    if ($pathinfo === '/js/63a2f85_part_1_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '63a2f85',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_63a2f85_1',);
                    }

                }

                // _assetic_63a2f85_2
                if ($pathinfo === '/js/63a2f85_part_1_npm_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '63a2f85',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_63a2f85_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // ab_site_home
            if (preg_match('#^/hello(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_site_home')), array (  '_controller' => 'AB\\SiteBundle\\Controller\\DefaultController::indexAction',  'page' => 1,));
            }

            // ab_site_contact
            if ($pathinfo === '/hello/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ab_site_contact;
                }

                return array (  '_controller' => 'AB\\SiteBundle\\Controller\\DefaultController::contactAction',  '_route' => 'ab_site_contact',);
            }
            not_ab_site_contact:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
