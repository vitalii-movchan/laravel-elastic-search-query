<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory\Contract;

use Elastic;

/**
 * @interface Factory
 */
interface Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\Common\Query
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\Common\Query;
}
