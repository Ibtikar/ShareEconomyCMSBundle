<?php

namespace Ibtikar\ShareEconomyCMSBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ibtikar_share_economy_cms');

        $rootNode
            ->children()
                ->scalarNode('requireLoggedInUser')
                ->end()
                ->scalarNode('showUserEmail')
                ->end()
                ->scalarNode('showUserPhone')
                ->end()
                ->scalarNode('frontend_template')
                    ->defaultValue('IbtikarShareEconomyCMSBundle:Pages:view.html.twig')
                ->end()
                ->scalarNode('applyTextEditor')
                    ->defaultValue(true)
                ->end()
                ->scalarNode('dashboard_layout')
                    ->defaultValue('IbtikarShareEconomyDashboardDesignBundle:Layout:dashboard.html.twig')
                ->end()
                ->scalarNode('dashboard_list_template')
                    ->defaultValue('IbtikarShareEconomyDashboardDesignBundle:List:list.html.twig')
                ->end()
            ->end();

        return $treeBuilder;
    }
}