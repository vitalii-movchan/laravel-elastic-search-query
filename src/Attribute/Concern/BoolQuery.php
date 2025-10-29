<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class BoolQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery boolQuery
 */
trait BoolQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    private Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function getBoolQuery(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
    {
        return $this->boolQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery
     * @return $this
     */
    public function setBoolQuery(Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery): static
    {
        $this->boolQuery = $boolQuery;

        return $this;
    }
}
