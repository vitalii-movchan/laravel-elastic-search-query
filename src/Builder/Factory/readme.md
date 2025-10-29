Import classes
```
use Sxope\Infra\Search\Elastic\Query;
```

Create match query builder
```
$matchQueryBuilder = (new Query\Builder\Factory\MatchFactory())->create();
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
$filterQueryBuilder = (new Query\Builder\Factory\FilterFactory())->create();
$mustQueryBuilder = (new Query\Builder\Factory\MustFactory())->create();
$mustNotQueryBuilder = (new Query\Builder\Factory\MustNotFactory())->create();
$shouldQueryBuilder = (new Query\Builder\Factory\ShouldFactory())->create();
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
$boolQueryBuilder = (new Query\Builder\Factory\BoolFactory())->create();
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
