<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;
use SplObjectStorage;

/**
 * @factory
 *
 * @class MustFactory
 * @implement Elastic\Elasticsearch\Query\Composition\QueryBuilder\Factory\Contract\Factory
 */
class MustFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\MustCompositeBuilder(
            (new Elastic\Elasticsearch\Query\Builder\Factory\MustFactory())->create(),
            new SplObjectStorage()
        );
    }
}
