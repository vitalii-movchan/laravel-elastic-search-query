<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern;

use Conceptual;
use Elastic;

/**
 * @class Fillable
 */
trait Fillable
{
    use Conceptual\Composition\Concern\Composite;

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Parameters $parameters
     * @return void
     */
    public function fill(Elastic\Elasticsearch\Query\Collection\Parameters $parameters): void
    {
        $this->getChildren()->rewind();

        while ($this->getChildren()->valid()) {
            if ($this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Fillable) {
                $this->getChildren()->current()->fill($parameters);
            }

            $this->getChildren()->next();
        }
    }
}
