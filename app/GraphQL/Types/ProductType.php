<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Product',
        'description' => 'Name of product',
        'model' => Product::class
    ];

    public function fields(): array
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
}
