<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Contract;

use Elastic;

/**
 * @interface MustNotQuery
 */
interface MustNotQuery
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     * @return $this
     */
    public function setMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery): static;
}
