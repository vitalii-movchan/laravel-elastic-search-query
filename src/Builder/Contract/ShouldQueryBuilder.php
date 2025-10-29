<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface ShouldQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
 */
interface ShouldQueryBuilder extends
    Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder,
    Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery;
}
