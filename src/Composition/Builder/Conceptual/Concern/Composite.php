<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern;

use Conceptual;
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
    use Conceptual\Composition\Concern\Composite;

    /**
     * @return void
     */
    abstract public function build(): void;
}
