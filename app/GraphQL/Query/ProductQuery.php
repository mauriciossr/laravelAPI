<?php

declare(strict_types=1);

namespace App\GraphQL\Query;

use App\Product;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;

use Rebing\GraphQL\GraphQL as GraphQL;

class ProductQuery extends Query
{
    protected $attributes = [
        'name' => 'product',
        'description' => 'A query de Products'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('product_type'));
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::ID()),
                'description'=> "Id of product"
            ]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Product::all();              
    }
}
