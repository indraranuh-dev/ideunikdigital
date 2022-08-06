<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Marketing\Entities\Service;
use Modules\Master\Services\Category\CategoryQuery;
use Modules\Post\Entities\Post;
use Modules\Post\Entities\PostType;
use Modules\Post\Services\Post\PostQuery;

class FrontController extends Controller
{
    /**
     * Display a sitemap.
     *
     * @return \Illuminate\Http\Response
     */
    public function sitemap()
    {
        $types = PostType::all();
        $posts = [];

        foreach ($types as $type) {
            $posts[$type->slug_name] = Post::published()->select(['title', 'slug_title', 'type_id', 'updated_at'])->where('type_id', $type->id)->get();
        }

        return response()->view('front::sitemap', [
            'posts' => $types,
            'posts' => collect($posts),
        ])->header('Content-Type', 'text/xml');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return view('front::pages.index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function about(Request $request)
    {
        return view('front::pages.about');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function service(Request $request)
    {
        return view('front::pages.service');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function showService(Request $request)
    {
        $service = Service::where('slug_name', $request->slug)->firstOrFail();
        return view('front::pages.show-service', [
            'service' => $service,
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function project(Request $request)
    {
        return view('front::pages.projects');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function contact(Request $request)
    {
        return view('front::pages.contact');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function posts(Request $request)
    {
        $posts = (new PostQuery())->publicPosts((object) [
            'category' => $request->category,
            'type' => $request->type,
            'status' => $request->status,
            'sort' => $request->sort,
            'order' => $request->order,
            'search' => $request->search,
        ], 10);

        return view('front::pages.post', [
            'posts' => $posts,
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function showPost($slug_title)
    {
        $post = (new PostQuery())->showPublicPost($slug_title);
        $categories = (new CategoryQuery())->getByTableReference('posts.berita');

        return view('front::pages.post-show', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }
}