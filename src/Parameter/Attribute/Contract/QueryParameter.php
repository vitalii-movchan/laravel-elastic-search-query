<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Contract;

use Elastic;

/**
 * @interface QueryParameter
 */
interface QueryParameter
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function getQueryParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @return $this
     */
    public function setQueryParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter): static;
}
