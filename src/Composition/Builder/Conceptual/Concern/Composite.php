<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern;

use Elastic;

/**
 * @trait
 *
 * @class Composition
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Conceptual\Concern\Composite
 */
trait Composite
{
    use  Elastic\Elasticsearch\Query\Composition\Conceptual\Concern\Composite;

    /**
     * @return void
     */
    abstract public function build(): void;
}
