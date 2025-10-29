<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @entity
 *
 * @class MustQuery
 *
 * @property Elastic\Elasticsearch\Query\Entity\Contract\MustQuery mustQuery
 */
trait MustQuery
{
    /**
     * @var Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    private Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
    {
        return $this->mustQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     * @return $this
     */
    public function setMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery): static
    {
        $this->mustQuery = $mustQuery;

        return $this;
    }
}
