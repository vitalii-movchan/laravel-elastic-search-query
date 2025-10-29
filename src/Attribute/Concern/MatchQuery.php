<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class MatchQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery
 */
trait MatchQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    private Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    public function getMatchQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
    {
        return $this->matchQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery
     * @return $this
     */
    public function setMatchQuery(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery): static
    {
        $this->matchQuery = $matchQuery;

        return $this;
    }
}
