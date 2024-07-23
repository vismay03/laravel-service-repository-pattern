<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostService
{
    protected $postRepository;


    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    public function getAllPost(){
        return $this->postRepository->all();
    }


    public function createPost(array $data){
        return $this->postRepository->create($data);
    }


    public function getPostById($id){
        return $this->postRepository->find($id);
    }


    public function updatePost($id, array $data){
        return $this->postRepository->update($id, $data);
    }


    public function deletePost($id){
        return $this->postRepository->delete($id);  
    }

}