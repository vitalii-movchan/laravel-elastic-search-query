<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Concern;

use Elastic;

/**
 * @trait
 * @class QueryParameter
 *
 * @property Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter fieldParameter
 */
trait FieldParameter
{
    /**
     * @var Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    private Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function getFieldParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
    {
        return $this->fieldParameter;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @return $this
     */
    public function setFieldParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter): static
    {
        $this->fieldParameter = $fieldParameter;

        return $this;
    }
}
