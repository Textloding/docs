<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $documentId = request()->get('document_id');
            $versionId = request()->get('version_id');
            $chapterId = request()->get('chapter_id');
            if ($documentId){
                $grid->model()->where('document_id',$documentId);
            }
            if ($versionId){
                $grid->model()->where('version_id',$versionId);
            }
            if ($chapterId){
                $grid->model()->where('chapter_id',$chapterId);
                $grid->model()->with('chapter');
            }
            $grid->model()->with(['document','version']);

            $grid->column('id')->sortable();
            $grid->column('document.name','文档名称');
            $grid->column('version.version_number','文档版本');
            if ($chapterId) {
                $grid->column('chapter.title', '文档章节')->display(function () {
                    $chapterOrder = $this->chapter->order;
                    $chapterTitle = $this->chapter->title;
                    $chapterOrderChinese = numberToChinese($chapterOrder);
                    return "第{$chapterOrderChinese}章. {$chapterTitle}";
                });
            } else {
                $grid->column('chapter_id')->display(function () {
                    return "无";
                });
            }

            $grid->column('slug','跳转链接')->help('如需切换版本，请保持各版本跳转链接不变');
            $grid->column('title');
            $grid->column('order');
            $grid->column('created_at')->sortable();
            $grid->disableViewButton();
            $grid->disableCreateButton();

            $grid->tools(function (Grid\Tools $tools) use ($documentId, $versionId, $chapterId) {
                if ($chapterId){
                    $tools->append("<a class='btn btn-primary' href='" . admin_url("chapters?document_id={$documentId}&version_id={$versionId}") . "'>返回章节管理</a>");
                    $tools->append("<a class='btn btn-primary' href='" . admin_url("articles/create?document_id={$documentId}&version_id={$versionId}&chapter_id={$chapterId}") . "'>新增文章</a>");
                }else{
                    $tools->append("<a class='btn btn-primary' href='" . admin_url("versions?document_id={$documentId}") . "'>返回版本管理</a>");
                    $tools->append("<a class='btn btn-primary' href='" . admin_url("articles/create?document_id={$documentId}&version_id={$versionId}") . "'>新增文章</a>");
                }
            });
            $grid->order->orderable();
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('document_id');
            $show->field('version_id');
            $show->field('chapter_id');
            $show->field('title');
            $show->field('content');
            $show->field('order');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Article(), function (Form $form) {
            $form->hidden('id');
            $documentId = request()->get('document_id')?request()->get('document_id'):$form->model()->document_id;
            $versionId = request()->get('version_id')?request()->get('version_id'):$form->model()->version_id;
            $chapterId = request()->get('chapter_id')?request()->get('chapter_id'):$form->model()->chapter_id;

            $form->hidden('document_id')->value($documentId);
            $form->hidden('version_id')->value($versionId);
            if ($chapterId){
                $form->hidden('chapter_id')->value($chapterId);
            }else{
                $form->hidden('chapter_id');
            }

            $form->hidden('id');
            $form->text('slug','跳转链接')->required();
            $form->text('title');
            $form->markdown('content')->languageUrl(admin_asset('@admin/dcat/plugins/editor-md/languages/zh-tw.js'))->required();

            $document = \App\Models\Document::find($documentId);

            if ($document && $document->auto_numbering) {
                // 自动编号
                if ($chapterId){
                    $lastChapter = \App\Models\Article::where('document_id', $documentId)->where('version_id', $versionId)->where('chapter_id',$chapterId)->orderBy('order', 'desc')->first();
                }else{
                    $lastChapter = \App\Models\Article::where('document_id', $documentId)->where('version_id', $versionId)->orderBy('order', 'desc')->first();
                }

                $nextOrder = $lastChapter ? $lastChapter->order + 1 : 1;
                $form->display('order', '排序')->value($nextOrder)->help('文档已设置自动排序');
                $form->hidden('order')->value($nextOrder);
            } else {
                // 手动编号
                $form->number('order', '排序')->required();
            }

            $form->display('created_at');
            $form->display('updated_at');
            $form->disableListButton();
        });
    }

    protected function numberToChinese($number)
    {
        $numbers = ['零', '一', '二', '三', '四', '五', '六', '七', '八', '九'];
        $units = ['', '十', '百', '千', '万', '十万', '百万', '千万', '亿'];
        $chars = [];
        $length = strlen($number);
        for ($i = 0; $i < $length; $i++) {
            $n = $number[$length - $i - 1];
            $chars[] = $units[$i];
            $chars[] = $numbers[$n];
        }
        $chars = array_reverse($chars);
        $chars = implode('', $chars);
        $chars = preg_replace('/零[十百千]/u', '零', $chars);
        $chars = preg_replace('/零+/u', '零', $chars);
        $chars = rtrim($chars, '零');
        $chars = preg_replace('/零$/u', '', $chars);
        $chars = str_replace('一十', '十', $chars);
        return $chars;
    }

}
