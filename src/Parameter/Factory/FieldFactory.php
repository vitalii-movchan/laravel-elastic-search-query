<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Factory;

use Elastic;

/**
 * @class FieldFactory
 * @implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
 */
class FieldFactory implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function create(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
    {
        return new Elastic\Elasticsearch\Query\Parameter\Entity\FieldParameter('');
    }
}
