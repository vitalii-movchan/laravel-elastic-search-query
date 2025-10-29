<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class ShouldQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\ShouldQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\ShouldQuery
 */
class ShouldQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\ShouldQuery,
    Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\ShouldQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery)
    {
        $this->shouldQuery = $shouldQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return self
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->shouldQuery->addQuery($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries
    {
        return $this->shouldQuery->getQueries();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): self
    {
        $this->shouldQuery->setQueries($queries);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->shouldQuery = (new Elastic\Elasticsearch\Query\Factory\ShouldFactory())->create();
    }
}
