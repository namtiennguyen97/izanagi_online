<?php


namespace App\Http\Service\Blog;



use App\Http\Repositories\Blog\BlogInterfaceRepository;

class BlogServiceImpl implements BlogServiceInterface
{
    protected $blogRepo;
public function __construct(BlogInterfaceRepository $blogInterfaceRepository)
{
    $this->blogRepo = $blogInterfaceRepository;
}

    public function getAll()
    {
        return $this->blogRepo->getAll();
    }
}
