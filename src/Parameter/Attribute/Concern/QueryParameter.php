<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @class QueryParameter
 *
 * @property Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter queryParameter
 */
trait QueryParameter
{
    /**
     * @var Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    private Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function getQueryParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
    {
        return $this->queryParameter;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @return $this
     */
    public function setQueryParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter): static
    {
        $this->queryParameter = $queryParameter;

        return $this;
    }
}
