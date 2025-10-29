Import classes
```
use Sxope\Infra\Search\Elastic\Query;
```

Create match query builder
```
$matchBuilder = new MatchBuilder(
    new MatchQuery(
        new FieldParameter(''),
        new QueryParameter(''),
        new FuzzinessParameter(null),
        new BoostParameter(null),
        new MatchValidator()
    )
);
```

Get match query
```
$rawMatchQuery = $matchQueryBuilder->getMatchQuery()->toArray();
```

Output
```json
{
    "match": []
}
```

Update match query builder
```
$matchQueryBuilder
    ->setFieldParameter(new Query\Parameter\Entity\FieldParameter('name'))
    ->setQueryParameter(new Query\Parameter\Entity\QueryParameter('John Doe'))
    ->setFuzzinessParameter(new Query\Parameter\Entity\FuzzinessParameter(1))
    ->setBoostParameter(new Query\Parameter\Entity\BoostParameter(1.0));
```

Get match query
```
$rawMatchQuery = $matchQueryBuilder->getMatchQuery()->toArray();
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

Create clause query builders
```
$filterQueryBuilder = new Query\Builder\FilterQueryBuilder(new Query\Entity\FilterQuery(new Query\Collection\Queries()));
$mustQueryBuilder = new Query\Builder\MustQueryBuilder(new Query\Entity\MustQuery(new Query\Collection\Queries()));
$mustNotQueryBuilder = new Query\Builder\MustNotQueryBuilder(new Query\Entity\MustNotQuery(new Query\Collection\Queries()));
$shouldQueryBuilder = new Query\Builder\ShouldQueryBuilder(new Query\Entity\ShouldQuery(new Query\Collection\Queries()));
```

Get must query
```
$rawMustQuery = $mustQueryBuilder->getMustQuery()->toArray();
```

Output
```json
{
    "must": []
}
```

Update must query builder
```
$mustQueryBuilder->addQuery($matchQueryBuilder->getMatchQuery());
```

Get must query
```
$rawMustQuery = $mustQueryBuilder->getMustQuery()->toArray();
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

Create bool query builder
```
$boolQueryBuilder = new Query\Builder\BoolQueryBuilder(
    new Query\Entity\BoolQuery(
        new Query\Entity\FilterQuery(new Query\Collection\Queries()),
        new Query\Entity\MustQuery(new Query\Collection\Queries()),
        new Query\Entity\MustNotQuery(new Query\Collection\Queries()),
        new Query\Entity\ShouldQuery(new Query\Collection\Queries())
    )
);
```

Get bool query
```
$rawBoolQuery = $boolQueryBuilder->getBoolQuery()->toArray();
```

Output
```json
{
    "bool": []
}
```

Update bool query builder
```
$boolQueryBuilder->setMustQuery($mustQueryBuilder->getMustQuery());
```

Get bool query
```
$rawBoolQuery = $boolQueryBuilder->getBoolQuery()->toArray();
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
