<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Validation\Rules;

use Closure;
use Elastic;
use Illuminate;

class MatchQuery implements Illuminate\Contracts\Validation\ValidationRule
{
    /**
     * @param string $attribute
     * @param mixed $value
     * @param Closure $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value instanceof Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery === false) {
            $fail($attribute, "Wrong type of query!");
        }

        if ($value->getFieldParameter()->isEmpty()) {
            $fail($attribute, "Wrong field parameter!");
        }

        if ($value->getQueryParameter()->isEmpty()) {
            $fail($attribute, "Wrong query parameter!");
        }
    }
}
