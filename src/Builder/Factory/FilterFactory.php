<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class FilterFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class FilterFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\FilterQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\FilterFactory())->create()
        );
    }
}
