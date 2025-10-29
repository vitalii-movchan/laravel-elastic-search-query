<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract\Common;

/**
 * @interface QueryBuilder
 */
interface QueryBuilder
{
    /**
     * @return void
     */
    public function resetQuery(): void;
}
