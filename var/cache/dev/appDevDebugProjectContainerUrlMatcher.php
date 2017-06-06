<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'CineBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'CineBundle\\Controller\\UserController::registroAction',  '_route' => 'register',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'CineBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/pelicula')) {
            // nueva_peli
            if ($pathinfo === '/pelicula/nueva') {
                return array (  '_controller' => 'CineBundle\\Controller\\PeliculaController::nuevaAction',  '_route' => 'nueva_peli',);
            }

            // index_peli
            if ($pathinfo === '/pelicula/index') {
                return array (  '_controller' => 'CineBundle\\Controller\\PeliculaController::indexAction',  '_route' => 'index_peli',);
            }

            if (0 === strpos($pathinfo, '/pelicula/e')) {
                // editar_peli
                if (0 === strpos($pathinfo, '/pelicula/editar') && preg_match('#^/pelicula/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_peli')), array (  '_controller' => 'CineBundle\\Controller\\PeliculaController::editaAction',));
                }

                // eliminar_peli
                if (0 === strpos($pathinfo, '/pelicula/eliminar') && preg_match('#^/pelicula/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_peli')), array (  '_controller' => 'CineBundle\\Controller\\PeliculaController::eliminaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/cine')) {
            // nuevo_cine
            if ($pathinfo === '/cine/nuevo') {
                return array (  '_controller' => 'CineBundle\\Controller\\CineController::nuevoAction',  '_route' => 'nuevo_cine',);
            }

            // index_cine
            if ($pathinfo === '/cine/index') {
                return array (  '_controller' => 'CineBundle\\Controller\\CineController::indexAction',  '_route' => 'index_cine',);
            }

            if (0 === strpos($pathinfo, '/cine/e')) {
                // editar_cine
                if (0 === strpos($pathinfo, '/cine/editar') && preg_match('#^/cine/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_cine')), array (  '_controller' => 'CineBundle\\Controller\\CineController::editaAction',));
                }

                // eliminar_cine
                if (0 === strpos($pathinfo, '/cine/eliminar') && preg_match('#^/cine/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_cine')), array (  '_controller' => 'CineBundle\\Controller\\CineController::eliminaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/pelicopia')) {
            // pelicopia_nueva
            if ($pathinfo === '/pelicopia/nueva') {
                return array (  '_controller' => 'CineBundle\\Controller\\PelicopiaController::nuevaAction',  '_route' => 'pelicopia_nueva',);
            }

            // pelicopia_index
            if ($pathinfo === '/pelicopia/index') {
                return array (  '_controller' => 'CineBundle\\Controller\\PelicopiaController::indexAction',  '_route' => 'pelicopia_index',);
            }

            if (0 === strpos($pathinfo, '/pelicopia/e')) {
                // pelicopia_elimina
                if (0 === strpos($pathinfo, '/pelicopia/eliminar') && preg_match('#^/pelicopia/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicopia_elimina')), array (  '_controller' => 'CineBundle\\Controller\\PelicopiaController::eliminaAction',));
                }

                // pelicopia_edita
                if (0 === strpos($pathinfo, '/pelicopia/editar') && preg_match('#^/pelicopia/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicopia_edita')), array (  '_controller' => 'CineBundle\\Controller\\PelicopiaController::editaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/funcion')) {
            // funcion_nueva
            if ($pathinfo === '/funcion/nueva') {
                return array (  '_controller' => 'CineBundle\\Controller\\FuncionController::nuevoAction',  '_route' => 'funcion_nueva',);
            }

            // funcion_index
            if ($pathinfo === '/funcion/index') {
                return array (  '_controller' => 'CineBundle\\Controller\\FuncionController::indexAction',  '_route' => 'funcion_index',);
            }

        }

        // entrada_nueva
        if (0 === strpos($pathinfo, '/entrada/nueva') && preg_match('#^/entrada/nueva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrada_nueva')), array (  '_controller' => 'CineBundle\\Controller\\EntradaController::nuevaAction',));
        }

        // func_horarios
        if (0 === strpos($pathinfo, '/horarios') && preg_match('#^/horarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'func_horarios')), array (  '_controller' => 'CineBundle\\Controller\\EntradaController::horariosAction',));
        }

        // entrada_confirmacion
        if (0 === strpos($pathinfo, '/entrada/confirmacion') && preg_match('#^/entrada/confirmacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrada_confirmacion')), array (  '_controller' => 'CineBundle\\Controller\\EntradaController::confirmaAction',));
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
