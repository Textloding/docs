<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Chapter;
use App\Models\Document;
use App\Models\Version;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Request $request, $document_slug, $version_number, $article_slug, $article_id)
    {
        $document = Document::where('slug', $document_slug)->firstOrFail();

        // 如果文档是私有的且管理员未认证，则重定向到管理员密码验证页面
        if ($document->is_public == 0 && !session()->has('admin_authenticated')) {
            session(['original_url' => $request->fullUrl()]);
            return redirect()->route('password.verify', ['slug' => 'admin']);
        }

        // 如果文档是公开的且需要访问密码，检查文档访问权限
        if ($document->is_public == 1 && $document->requires_password && !$request->session()->has('document_access_' . $document->id)) {
            session(['original_url' => $request->fullUrl()]);
            return redirect()->route('password.verify', ['slug' => $document_slug]);
        }

        $version = Version::where('document_id', $document->id)
            ->where('version_number', $version_number)
            ->firstOrFail();
        $article = Article::where('slug', $article_slug)
            ->where('version_id', $version->id)
            ->where('id', $article_id)
            ->firstOrFail();

        $articles = $document->has_chapters
            ? $version->articles()->with('chapter')->orderBy('chapter_id')->orderBy('order')->get()->groupBy('chapter_id')
            : $version->articles()->orderBy('order')->get();

        return view('documents.articles.show', compact('document', 'version', 'article', 'articles'));
    }

    public function findArticleIdBySlug($document_slug, $version_number, $chapter_id, $article_slug)
    {

        $document = Document::where('slug', $document_slug)->firstOrFail();
        $version = Version::where('document_id', $document->id)
            ->where('version_number', $version_number)
            ->firstOrFail();
        $chapter = Chapter::where('id',$chapter_id)->firstOrFail();
        $new_chapter = Chapter::where('document_id', $document->id)->where('version_id',$version->id)->where('title',$chapter->title)->firstOrFail();
        $article = Article::where('slug', $article_slug)
            ->where('chapter_id', $new_chapter->id)
            ->where('version_id', $version->id)
            ->first();
        if ($article) {
            return response()->json([
                'success' => true,
                'article_id' => $article->id
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => '该版本对应文章没有找到！'
            ]);
        }
    }

    public function findArticleIdBySlugNoChapter($document_slug, $version_number, $article_slug)
    {
        $document = Document::where('slug', $document_slug)->firstOrFail();
        $version = Version::where('document_id', $document->id)
            ->where('version_number', $version_number)
            ->firstOrFail();
        $article = Article::where('slug', $article_slug)
            ->whereNull('chapter_id')
            ->where('version_id', $version->id)
            ->first();
        if ($article) {
            return response()->json([
                'success' => true,
                'article_id' => $article->id
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => '该版本对应文章没有找到！'
            ]);
        }
    }
}
