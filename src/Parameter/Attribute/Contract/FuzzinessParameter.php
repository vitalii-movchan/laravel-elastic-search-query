<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Contract;

use Elastic;

/**
 * @interface FuzzinessParameter
 */
interface FuzzinessParameter
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function getFuzzinessParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @return $this
     */
    public function setFuzzinessParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter): static;
}
