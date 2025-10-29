<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;
use SplObjectStorage;

/**
 * @factory
 *
 * @class BoolFactory
 * @implement Elastic\Elasticsearch\Query\Composition\QueryBuilder\Factory\Contract\Factory
 */
class BoolFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\BoolCompositeBuilder(
            (new Elastic\Elasticsearch\Query\Builder\Factory\BoolFactory())->create(),
            new SplObjectStorage()
        );
    }
}
