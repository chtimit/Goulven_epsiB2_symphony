<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/bag' => [[['_route' => 'bag_index', '_controller' => 'App\\Controller\\BagController::index'], null, ['GET' => 0], null, true, false, null]],
            '/pokemon' => [[['_route' => 'pokemon_index', '_controller' => 'App\\Controller\\PokemonController::index'], null, ['GET' => 0], null, true, false, null]],
            '/pokemon/new' => [[['_route' => 'pokemon_new', '_controller' => 'App\\Controller\\PokemonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/starter' => [[['_route' => 'starter_index', '_controller' => 'App\\Controller\\StarterController::index'], null, ['GET' => 0], null, true, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/bag/id/([^/]++)(*:185)'
                    .'|/pokemon/(?'
                        .'|id/([^/]++)(*:216)'
                        .'|type/([^/]++)(*:237)'
                        .'|([^/]++)(?'
                            .'|/edit(*:261)'
                            .'|(*:269)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            185 => [[['_route' => 'bag_show', '_controller' => 'App\\Controller\\BagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            216 => [[['_route' => 'pokemon_show', '_controller' => 'App\\Controller\\PokemonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            237 => [[['_route' => 'pokemon_showType', '_controller' => 'App\\Controller\\PokemonController::showType'], ['type'], ['GET' => 0], null, false, true, null]],
            261 => [[['_route' => 'pokemon_edit', '_controller' => 'App\\Controller\\PokemonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            269 => [[['_route' => 'pokemon_delete', '_controller' => 'App\\Controller\\PokemonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
