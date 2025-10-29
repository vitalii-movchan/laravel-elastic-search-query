<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;
use SplObjectStorage;

/**
 * @factory
 *
 * @class MustNotFactory
 * @implement Query\Composition\QueryBuilder\Factory\Contract\Factory
 */
class MustNotFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\MustCompositeNotBuilder(
            (new Elastic\Elasticsearch\Query\Builder\Factory\MustNotFactory())->create(),
            new SplObjectStorage()
        );
    }
}
