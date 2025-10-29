Import classes
```
use Sxope\Infra\Search\Elastic\Query;
```

Create match query
```
$matchQuery = new Query\Entity\MatchQuery(
    new Query\Parameter\Entity\FieldParameter(''),
    new Query\Parameter\Entity\QueryParameter(''),
    new Query\Parameter\Entity\FuzzinessParameter(null),
    new Query\Parameter\Entity\BoostParameter(null),
    new Query\Validation\MatchValidator()
);
```

Get match query
```
$rawMatchQuery = $matchQuery->toArray();
```

Output
```json
{
    "match": []
}
```

Update match query
```
$matchQuery
    ->setFieldParameter(new Query\Parameter\Entity\FieldParameter('name'))
    ->setQueryParameter(new Query\Parameter\Entity\QueryParameter('John Doe'))
    ->setFuzzinessParameter(new Query\Parameter\Entity\FuzzinessParameter(1))
    ->setBoostParameter(new Query\Parameter\Entity\BoostParameter(1.0));
```

Get match query
```
$rawMatchQuery = $matchQuery->toArray();
```

Output
```json
{
    "match": {
        "field": "name",
        "query": "John Doe",
        "fuzziness": 1,
        "boost": 1
    }
}
```

Create clause queries
```
$filterQuery = new Query\Entity\FilterQuery(new Query\Collection\Queries());
$mustQuery = new Query\Entity\MustQuery(new Query\Collection\Queries());
$mustNotQuery = new Query\Entity\MustNotQuery(new Query\Collection\Queries());
$shouldQuery = new Query\Entity\ShouldQuery(new Query\Collection\Queries());
```

Get must query
```
$rawMustQuery = $mustQuery->toArray();
```

Output
```json
{
    "must": []
}
```

Update must query
```
$mustQuery->addQuery($matchQuery);
```

Get must query
```
$rawMustQuery = $mustQuery->toArray();
```

Output
```json
{
    "must": [
        {
            "match": {
                "field": "name",
                "query": "John Doe",
                "fuzziness": 1,
                "boost": 1
            }
        }
    ]
}
```

Create bool query
```
$boolQuery = new Query\Entity\BoolQuery(
    new Query\Entity\FilterQuery(new Query\Collection\Queries()),
    new Query\Entity\MustQuery(new Query\Collection\Queries()),
    new Query\Entity\MustNotQuery(new Query\Collection\Queries()),
    new Query\Entity\ShouldQuery(new Query\Collection\Queries())
);
```

Get bool query
```
$rawBoolQuery = $boolQuery->toArray();
```

Output
```json
{
    "bool": []
}
```

Update bool query
```
$boolQuery->setMustQuery($mustQuery);
```

Get bool query
```
$rawBoolQuery = $boolQuery->toArray();
```

Output
```json
{
    "bool": {
        "must": [
            {
                "match": {
                    "field": "name",
                    "query": "John Doe",
                    "fuzziness": 1,
                    "boost": 1
                }
            }
        ]
    }
}
```
