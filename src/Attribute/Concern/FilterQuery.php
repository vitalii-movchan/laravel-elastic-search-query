<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class FilterQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
 */
trait FilterQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    private Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
    {
        return $this->filterQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     * @return $this
     */
    public function setFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery): static
    {
        $this->filterQuery = $filterQuery;

        return $this;
    }
}
