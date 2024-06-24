<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Dcat\Admin\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordVerificationController extends Controller
{
    public function show(Request $request, $slug)
    {
        if ($slug == 'admin') {
            $formAction = route('admin.verify.post', ['slug' => $slug]);
            $document = (object) ['name' => '管理员验证'];
        } else {
            $document = Document::where('slug', $slug)->firstOrFail();
            $formAction = $document->is_public == 0 ? route('admin.verify.post', ['slug' => $slug]) : route('documents.check-password', ['slug' => $slug]);
        }

        return view('documents.password', compact('document', 'formAction'));
    }

    public function verifyAdminPassword(Request $request, $slug)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $admin = Administrator::where('id',1)->first();

        if (Hash::check($request->password, $admin->password)) {
            session()->put('admin_authenticated', true);
            return redirect()->route('documents.index');
        }

        return back()->withErrors(['password' => '密码错误']);
    }

    public function verifyDocumentPassword(Request $request, $slug)
    {
        $document = Document::where('slug', $slug)->firstOrFail();

        $request->validate([
            'password' => 'required',
        ]);

        if ($document->password === $request->password) {
            $request->session()->put('document_access_' . $document->id, true);
            return redirect()->route('documents.show', ['slug' => $slug]);
        }

        return back()->withErrors(['password' => '密码错误']);
    }
}

