<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern;

use Concpetual;
use Elastic;

/**
 * @trait
 *
 * @class Composition
 *
 * @uses Conceptual\Composition\Concern\Composite
 */
trait Composite
{
    use Concpetual\Composition\Concern\Composite;

    /**
     * @return void
     */
    abstract public function build(): void;
}
