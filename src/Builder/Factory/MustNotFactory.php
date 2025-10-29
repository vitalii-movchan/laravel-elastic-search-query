<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MustNotFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class MustNotFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\MustNotQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\MustNotFactory())->create()
        );
    }
}
