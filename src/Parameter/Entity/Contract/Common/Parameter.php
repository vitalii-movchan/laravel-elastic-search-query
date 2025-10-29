<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common;

/**
 * @interface BoostParameter
 * @extends Parameter
 */
interface Parameter
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return mixed
     */
    public function getValue(): mixed;

    /**
     * @return bool
     */
    public function isEmpty(): bool;
}
