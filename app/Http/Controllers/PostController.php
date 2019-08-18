<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Bookmark;
use Auth;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    protected $postService;
    static $flag;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::paginate(config('posts.paginate'));

        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request) {
        $data = $request->only([
            'title',
            'content',
        ]);

        $data['user_id'] = auth()->id();
        $post = $this->postService->store($data);

        if (!$post) {
            return back()->with('status', __('posts.create_fail'));
        }

        return redirect('posts/' . $post->id)->with('status', __('posts.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = $this->postService->show($id);

        $bookmark = Bookmark::find(auth()->id());

        if ($bookmark->posts()->where('post_id', $id)->exists()) {
            PostController::$flag = true;
        } else {
            PostController::$flag = false;
        }

        return view('user.article', ['post' => $post, 'flag' => PostController::$flag]);
    }

    public function admin_show($id) {
        $post = $this->postService->show($id);

        return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EditPostRequest $request, $id) {
        $post = $this->postService->edit($id);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id) {
        $data = $request->only([
            'title',
            'content',
        ]);

        $post = $this->postService->update($id, $data);

        return redirect('posts/' . $post->id)->with('status', __('posts.create_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $delFlag = $this->postService->destroy($id);

        $result = [
            'status' => $delFlag,
            'msg' => $delFlag ? __('posts.delete_success') : __('posts.delete_fail'),
        ];
        
        return response()->json($result);
    }
}
