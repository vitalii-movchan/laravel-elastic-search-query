<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract;

use Elastic;

/**
 * @interface Fillable
 */
interface Fillable
{
    /**
     * @param Elastic\Elasticsearch\Query\Collection\Parameters $parameters
     * @return void
     */
    public function fill(Elastic\Elasticsearch\Query\Collection\Parameters $parameters): void;
}
