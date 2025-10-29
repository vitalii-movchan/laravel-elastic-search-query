<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract;

use Elastic;

/**
 * @interface FilterQueryBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
 */
interface FilterCompositeBuilder extends
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
     */
    public function getFilterQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterBuilder
     * @return $this
     */
    public function setFilterQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery;
}
