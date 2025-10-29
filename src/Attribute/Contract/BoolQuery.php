<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface BoolQuery
 */
interface BoolQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function getBoolQuery(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery
     * @return $this
     */
    public function setBoolQuery(Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery): static;
}
