<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;
use SplObjectStorage;

/**
 * @factory
 *
 * @class FilterFactory
 * @implement Elastic\Elasticsearch\Query\Composition\QueryBuilder\Factory\Contract\Factory
 */
class FilterFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\FilterCompositeBuilder(
            (new Elastic\Elasticsearch\Query\Builder\Factory\FilterFactory())->create(),
            new SplObjectStorage()
        );
    }
}
