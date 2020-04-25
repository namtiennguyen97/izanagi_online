<?php


namespace App\Http\Repositories\Blog;


use App\Blog;
use App\Http\Repositories\BaseRepositoryImpl;

class BlogRepositoryImpl extends BaseRepositoryImpl implements BlogInterfaceRepository
{
public function getModel()
{
    return Blog::class;
}
}
