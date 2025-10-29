<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern\Common;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class ClauseQuery
 *
 * @property Elastic\Elasticsearch\Query\Collection\Queries queries
 */
trait ClauseQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Collection\Queries
     */
    private Elastic\Elasticsearch\Query\Collection\Queries $queries;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): static
    {
        $this->queries->add($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries
    {
        return $this->queries;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): static
    {
        $this->queries = $queries;

        return $this;
    }
}
