<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Attribute\Contract;

use Elastic;

/**
 * @interface FieldParameter
 */
interface FieldParameter
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function getFieldParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @return $this
     */
    public function setFieldParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter): static;
}
