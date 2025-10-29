<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class MustQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\MustQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\MustQuery
 */
class MustQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\MustQuery,
    Contract\MustQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\MustQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery)
    {
        $this->mustQuery = $mustQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return self
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->mustQuery->addQuery($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries
    {
        return $this->mustQuery->getQueries();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): self
    {
        $this->mustQuery->setQueries($queries);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->mustQuery = (new Elastic\Elasticsearch\Query\Factory\MustFactory())->create();
    }
}
