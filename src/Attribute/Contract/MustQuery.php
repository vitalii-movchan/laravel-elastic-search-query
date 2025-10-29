<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface MustQuery
 */
interface MustQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     * @return $this
     */
    public function setMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery): static;
}
