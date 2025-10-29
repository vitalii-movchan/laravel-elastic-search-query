<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface MatchQuery
 */
interface MatchQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    public function getMatchQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery
     * @return $this
     */
    public function setMatchQuery(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery): static;
}
