<?php

namespace App\GraphQL\Types;

use App\Models\UserModel;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'location_id' => 'Location',
        'dog_id' => 'Dog',
        'model' => UserModel::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the user',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'location_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Location of the user',
            ],
            'dog_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Dog of the user',
            ],
        ];
    }
}
