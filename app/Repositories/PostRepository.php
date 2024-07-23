<?php 

namespace App\Repositories;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function all(){
        return $this->post->all();
    }

    public function create(array $data){
        return $this->post->create($data);
    }

    public function find($id){
        return $this->post->find($id);
    }

    public function update($id, $data){
        return $this->post->find($id)->update($data);
    }

    public function delete($id){
        return $this->post->find($id)->delete();
    }
}

