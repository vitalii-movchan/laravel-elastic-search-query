<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class BoolFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class BoolFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\BoolQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\BoolFactory())->create()
        );
    }
}
