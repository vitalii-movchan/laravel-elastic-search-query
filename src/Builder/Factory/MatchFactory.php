<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MatchFactory
 * @implement Elastic\Elasticsearch\Query\QueryBuilder\Factory\Contract\Factory
 */
class MatchFactory implements Elastic\Elasticsearch\Query\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
    {
        return new Elastic\Elasticsearch\Query\Builder\MatchQueryBuilder(
            (new Elastic\Elasticsearch\Query\Factory\MatchFactory())->create()
        );
    }
}
