<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract\Common;

use Elastic;

/**
 * @interface ClauseBuilder
 */
interface ClauseBuilder
{
    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self;

    /**
     * @return Elastic\Elasticsearch\Query\Collection\Queries
     */
    public function getQueries(): Elastic\Elasticsearch\Query\Collection\Queries;

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     * @return $this
     */
    public function setQueries(Elastic\Elasticsearch\Query\Collection\Queries $queries): self;
}
