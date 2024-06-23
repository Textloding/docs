<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $query = Document::where('is_public', 1)
            ->with(['versions' => function ($query) {
                $query->orderBy('version_number', 'desc');
            }]);

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $documents = $query->paginate(10);

        return view('documents.index', compact('documents'));
    }

    public function show(Request $request, $slug, $version = null)
    {
        $document = Document::where('slug', $slug)->firstOrFail();

        if ($document->requires_password && !$request->session()->has('document_access_' . $document->id)) {
            return view('documents.password', compact('document'));
        }

        if (!$version) {
            $version = $document->versions()->latest('version_number')->first();
        } else {
            $version = $document->versions()->where('version_number', $version)->firstOrFail();
        }

        $articles = $document->has_chapters
            ? $version->articles()->orderBy('chapter_id')->orderBy('order')->get()->groupBy('chapter_id')
            : $version->articles()->orderBy('order')->get();

        return view('documents.show', compact('document', 'version', 'articles'));
    }

    public function checkPassword(Request $request, $slug)
    {
        $document = Document::where('slug', $slug)->firstOrFail();
        $password = $request->input('password');

        if ($document->password === $password) {
            $request->session()->put('document_access_' . $document->id, true);
            return redirect()->route('documents.show', ['slug' => $slug]);
        }

        return back()->withErrors(['password' => '密码错误']);
    }
}

