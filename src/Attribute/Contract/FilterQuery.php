<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface FilterQuery
 */
interface FilterQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     * @return $this
     */
    public function setFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery): static;
}
