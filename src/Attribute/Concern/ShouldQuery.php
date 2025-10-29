<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class ShouldQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\ShouldQuery shouldQuery
 */
trait ShouldQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\ShouldQuery
     */
    private Elastic\Elasticsearch\Query\Entity\ShouldQuery $shouldQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\ShouldQuery
    {
        return $this->shouldQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\ShouldQuery $shouldQuery
     * @return $this
     */
    public function setShouldQuery(Elastic\Elasticsearch\Query\Entity\ShouldQuery $shouldQuery): static
    {
        $this->shouldQuery = $shouldQuery;

        return $this;
    }
}
