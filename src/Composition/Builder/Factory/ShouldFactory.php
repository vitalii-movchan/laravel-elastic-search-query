<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;
use SplObjectStorage;

/**
 * @factory
 *
 * @class ShouldFactory
 * @implement Query\Composition\QueryBuilder\Factory\Contract\Factory
 */
class ShouldFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\ShouldCompositeBuilder(
            (new Elastic\Elasticsearch\Query\Builder\Factory\ShouldFactory())->create(),
            new SplObjectStorage()
        );
    }
}
