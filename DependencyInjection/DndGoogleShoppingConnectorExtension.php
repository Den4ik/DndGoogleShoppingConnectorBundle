<?php

namespace Dnd\Bundle\GoogleShoppingConnectorBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Google Shopping connector bundle extension
 *
 * @author    Florian Fauvel <florian.fauvel@dnd.fr>
 * @copyright 2016 Agence Dn'D (http://www.dnd.fr)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DndGoogleShoppingConnectorExtension extends Extension
{

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('readers.yml');
        $loader->load('processors.yml');
        $loader->load('writers.yml');
        $loader->load('entities.yml');
        $loader->load('models.yml');
        $loader->load('form_types.yml');
        $loader->load('savers.yml');
        $loader->load('repositories.yml');
    }
    
}
