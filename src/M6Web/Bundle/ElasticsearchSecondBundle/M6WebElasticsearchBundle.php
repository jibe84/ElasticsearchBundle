<?php

namespace M6Web\Bundle\ElasticsearchSecondBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class M6WebElasticsearchSecondBundle
 *
 * @package M6Web\Bundle\ElasticsearchSecondBundle
 */
class M6WebElasticsearchSecondBundle extends Bundle
{
    /**
     * @return DependencyInjection\M6WebElasticsearchExtension|null|\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
     */
    public function getContainerExtension()
    {
        return new DependencyInjection\M6WebElasticsearchExtension();
    }
}
