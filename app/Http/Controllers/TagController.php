<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Services\TagService;
use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    protected $tagService;

    public function __construct(TagService $tagService) {
        $this->tagService = $tagService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tags = Tag::all();

        return view('admin.tags.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTagRequest $request) {
        $data = $request->only([
            'name',
            'description',
        ]);
        $data['user_id'] = auth()->id();
        $tag = $this->tagService->store($data);

        if (!$tag) {
            return back()->with('status', __('message.create_fail'));
        }

        return redirect('tags/' . $tag->id)->with('status', __('message.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $tag = $this->tagService->show($id);

        if (!$tag) {
            return back()->with('status', __('message.not_found'));
        }

        return view('tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $tag = $this->tagService->edit($id);
        
        if (!$tag) {
            return back()->with('status', __('message.not_found'));
        }
        
        return view('tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, $id) {
        $data = $request->only([
            'name',
            'description',
            'user_id'
        ]);

        $tag = $this->tagService->update($id, $data);
        
        if (!$tag) {
            return back()->with('status', __('message.create_fail'));
        }

        return redirect('tags/' . $tag->id)->with('status', __('message.create_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $delFlag = $this->tagService->destroy($id);

        $result = [
            'status' => $delFlag,
            'msg' => $delFlag ? __('message.delete_success') : __('message.delete_fail'),
        ];
        
        return response()->json($result);
    }
}
