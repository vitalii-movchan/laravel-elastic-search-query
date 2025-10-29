<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract;

/**
 * @interface Fillable
 */
interface Filterable
{
    /**
     * @return void
     */
    public function filter(): void;
}
