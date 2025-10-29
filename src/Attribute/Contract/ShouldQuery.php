<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface ShouldQuery
 */
interface ShouldQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\ShouldQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\ShouldQuery $shouldQuery
     * @return $this
     */
    public function setShouldQuery(Elastic\Elasticsearch\Query\Entity\ShouldQuery $shouldQuery): static;
}
