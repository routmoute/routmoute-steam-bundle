<?php

namespace Routmoute\Bundle\RoutmouteSteamBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('routmoute_steam');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('steam_apikey')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;
        return $treeBuilder;
    }
}