<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Factory\Contract;

use Elastic;

/**
 * @interface Factory
 */
interface Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder;
}
