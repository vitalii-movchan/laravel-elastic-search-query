<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface FilterQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
 */
interface FilterQueryBuilder extends
    Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder,
    Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery;
}
