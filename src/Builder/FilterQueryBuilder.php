<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class FilterQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\FilterQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\FilterQuery
 */
class FilterQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\FilterQuery,
    Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\FilterQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery)
    {
        $this->filterQuery = $filterQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return self
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->filterQuery->addQuery($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries
    {
        return $this->filterQuery->getQueries();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): self
    {
        $this->filterQuery->setQueries($queries);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->filterQuery = (new Elastic\Elasticsearch\Query\Factory\FilterFactory())->create();
    }
}
