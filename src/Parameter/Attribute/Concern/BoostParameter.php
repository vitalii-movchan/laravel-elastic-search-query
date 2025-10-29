<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @class QueryParameter
 *
 * @property Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter boostParameter
 */
trait BoostParameter
{
    /**
     * @var Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    private Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function getBoostParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
    {
        return $this->boostParameter;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @return $this
     */
    public function setBoostParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter): static
    {
        $this->boostParameter = $boostParameter;

        return $this;
    }
}
