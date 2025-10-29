<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Factory\Contract;

use Elastic;

/**
 * @interface Factory
 */
interface Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
     */
    public function create(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter;
}
