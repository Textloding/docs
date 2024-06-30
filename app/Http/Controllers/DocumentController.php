<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        // 获取 is_public 参数，默认值为 1
        $isPublic = $request->input('is_public', 1);

        // 如果请求私有文档并且未通过管理员验证，则重定向到密码验证页面
        if ($isPublic == 0 && !session()->has('admin_authenticated')) {
            session(['original_url' => $request->fullUrl()]);
            return redirect()->route('password.verify', ['slug' => 'admin']);
        }

        // 构建查询
        $query = Document::where('is_public', $isPublic)
            ->with(['versions' => function ($query) {
                $query->orderBy('version_number', 'desc');
            }]);

        // 处理搜索
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        // 获取文档
        $documents = $query->paginate(10);

        return view('documents.index', compact('documents', 'isPublic'));
    }



    public function show(Request $request, $slug, $version = null)
    {
        $document = Document::where('slug', $slug)->firstOrFail();

        // 如果文档是私有的且管理员未认证，则重定向到管理员密码验证页面
        if ($document->is_public == 0 && !session()->has('admin_authenticated')) {
            session(['original_url' => $request->fullUrl()]);
            return redirect()->route('password.verify', ['slug' => 'admin']);
        }

        // 如果文档是公开的且需要访问密码，检查文档访问权限
        if ($document->is_public == 1 && $document->requires_password && !$request->session()->has('document_access_' . $document->id)) {
            session(['original_url' => $request->fullUrl()]);
            return redirect()->route('password.verify', ['slug' => $slug]);
        }

        if (!$version) {
            $version = $document->versions()->latest('version_number')->first();
        } else {
            $version = $document->versions()->where('version_number', $version)->firstOrFail();
        }

        $articles = $document->has_chapters
            ? $version->articles()->join('chapters', 'articles.chapter_id', '=', 'chapters.id')
                ->orderBy('chapters.order')
                ->orderBy('articles.order')
                ->select('articles.*')
                ->with('chapter')
                ->get()
                ->groupBy('chapter_id')
            : $version->articles()->orderBy('order')->get();

        return view('documents.show', compact('document', 'version', 'articles'));
    }

}

