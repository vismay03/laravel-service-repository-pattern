<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
   protected $postService;

   public function __construct(PostService $postService)
   {
       $this->postService = $postService;
   }

   public function index()
   {
       $post = $this->postService->getAllPost();
       return response()->json($post);
   }

   public function store(Request $request)
   {
       $post = $this->postService->createPost($request->all());
       return response()->json($post);
   }

   public function show($id)
   {
       $post = $this->postService->getPostById($id);

       return response()->json($post);
   }

   public function update(Request $request, $id)
   {
       $post = $this->postService->updatePost($id, $request->all());
       return response()->json($post);
   }

   public function destroy($id)
   {
       $post = $this->postService->deletePost($id);
       return response()->json(null, 204);
   }


}
