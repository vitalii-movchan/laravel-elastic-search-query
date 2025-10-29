<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract;

use Elastic;

/**
 * @interface Factory
 */
interface Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder;
}
