<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;
use GraphQL;

class ProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'product',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return GraphQL::type('product_type');
    }

    public function args(): array
    {
        return [
            'id'=> [
                'type' => Type::nonNull(Type::ID()),
                'description' => 'Id of Product for database'
            ],
            'name'=> [
                'type' => Type::nonNull(Type::string()),
                'description' => 'name of Product'
            ],
            'description'=> [
                'type' => Type::string(),
                'description' => 'description of Product'
            ],
            'brand'=> [
                'type' => Type::string(),
                'description' => 'brand of Product'
            ],
            'category'=> [
                'type' => Type::string(),
                'description' => 'category of Product'
            ],
            'price'=> [
                'type' => Type::float(),
                'description' => 'price of Product'
            ],
            'color'=> [
                'type' => Type::string(),
                'description' => 'color of Product'
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $product = Product::create([
            'name' => $args['name'],
            'description' => $args['description'],
            'brand' => $args['brand'],
            'category' => $args['category'],
            'price' => $args['price'],
            'color' => $args['price'],
            'created_at' => today(),
            'updated_at' => today()
        ]);

        return $product;
    }
}
