<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface MustNotQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
 */
interface MustNotQueryBuilder extends
    Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder,
    Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery;
}
