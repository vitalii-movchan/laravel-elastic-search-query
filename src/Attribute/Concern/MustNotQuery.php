<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class MustNotQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery mustNotQuery
 */
trait MustNotQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    private Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
    {
        return $this->mustNotQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     * @return $this
     */
    public function setMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery): static
    {
        $this->mustNotQuery = $mustNotQuery;

        return $this;
    }
}
