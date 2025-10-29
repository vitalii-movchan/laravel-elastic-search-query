<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @class QueryParameter
 *
 * @property Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter fuzzinessParameter
 */
trait FuzzinessParameter
{
    /**
     * @var Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    private Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function getFuzzinessParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
    {
        return $this->fuzzinessParameter;
    }


    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @return $this
     */
    public function setFuzzinessParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter): static
    {
        $this->fuzzinessParameter = $fuzzinessParameter;

        return $this;
    }
}
