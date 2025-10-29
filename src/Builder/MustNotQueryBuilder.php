<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class MustNotQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\MustNotQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\MustNotQuery
 */
class MustNotQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\MustNotQuery,
    Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\MustNotQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery)
    {
        $this->mustNotQuery = $mustNotQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return self
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->mustNotQuery->addQuery($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries
    {
        return $this->mustNotQuery->getQueries();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): self
    {
        $this->mustNotQuery->setQueries($queries);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->mustNotQuery = (new Elastic\Elasticsearch\Query\Factory\MustNotFactory())->create();
    }
}
