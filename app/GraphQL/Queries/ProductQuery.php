<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

use GraphQL;
class ProductQuery extends Query
{
    protected $attributes = [
        'name' => 'product',
        'description' => 'A query de Products'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type(''));
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description'=> "Id of product"
            ]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        //$fields = $getSelectFields();
        //$select = $fields->getSelect();
        //$with = $fields->getRelations();
                
    }
}
