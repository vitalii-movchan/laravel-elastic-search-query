<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MustFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class MustFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\MustQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\MustFactory())->create()
        );
    }
}
