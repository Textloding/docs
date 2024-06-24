<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Chapter;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ChapterController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Chapter(), function (Grid $grid) {
            $documentId = request()->get('document_id');
            $versionId = request()->get('version_id');
            if ($documentId){
                $grid->model()->where('document_id',$documentId);
            }
            if ($versionId){
                $grid->model()->where('version_id',$versionId);
            }
            $grid->model()->with(['document','version']);
            $grid->model()->orderBy('order');
            $grid->column('id')->sortable();
            $grid->column('document.name','文档名称');
            $grid->column('version.version_number','文档版本');
            $grid->column('title');
            $grid->column('order')->sortable()->orderable();
            // 添加自定义版本管理按钮
            $grid->column('article_management', '下级管理')->display(function () {
                $documentId = $this->document_id;
                $versionId = $this->version_id;
                $chapterId = $this->id;
                $url = admin_url("articles?document_id={$documentId}&version_id={$versionId}&chapter_id={$chapterId}");
                return "<a href='{$url}' class='btn btn-sm btn-primary'>文章管理</a>";
            });
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableViewButton();
            $grid->disableCreateButton();

            $grid->tools(function (Grid\Tools $tools) use ($documentId, $versionId) {
                $tools->append("<a class='btn btn-primary' href='" . admin_url("versions?document_id={$documentId}") . "'>返回版本管理</a>");
                $tools->append("<a class='btn btn-primary' href='" . admin_url("chapters/create?document_id={$documentId}&version_id={$versionId}") . "'>新增章节</a>");
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
        return Show::make($id, new Chapter(), function (Show $show) {
            $show->field('id');
            $show->field('document_id');
            $show->field('version_id');
            $show->field('title');
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
        return Form::make(new Chapter(), function (Form $form) {
            $form->hidden('id');
            $documentId = request()->get('document_id')?request()->get('document_id'):$form->model()->document_id;
            $versionId = request()->get('version_id')?request()->get('version_id'):$form->model()->version_id;

            $form->hidden('document_id')->value($documentId);
            $form->hidden('version_id')->value($versionId);
            $form->text('title');

            $document = \App\Models\Document::find($documentId);

            if ($document && $document->auto_numbering) {
                // 自动编号
                $lastChapter = \App\Models\Chapter::where('document_id', $documentId)->where('version_id', $versionId)->orderBy('order', 'desc')->first();
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

}
