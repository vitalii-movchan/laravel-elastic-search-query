<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Contract;

use Elastic;

/**
 * @interface BoostParameter
 */
interface BoostParameter
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function getBoostParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @return $this
     */
    public function setBoostParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter): static;
}
