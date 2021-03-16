<?php

namespace App\GraphQL\Queries;

use App\Models\UserModel;
use GraphQL\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'users',
        'location_id' => 'Location',
        'dog_id' => 'Dog',
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function resolve($root, $args)
    {
        return UserModel::all();
    }
}
