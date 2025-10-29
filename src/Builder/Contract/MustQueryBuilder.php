<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface MustQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
 */
interface MustQueryBuilder extends
    Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder,
    Elastic\Elasticsearch\Query\Builder\Contract\Common\ClauseBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery;
}
