<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class ShouldFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class ShouldFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\ShouldQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\ShouldFactory())->create()
        );
    }
}
