<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Version;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class VersionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Version(), function (Grid $grid) {
            $documentId = request()->get('document_id');
            if ($documentId){
                $grid->model()->where('document_id',$documentId);
            }
            $grid->model()->with('document');
            $grid->column('id')->sortable();
            $grid->column('document.name','文档名称');
            $grid->column('version_number');
            $grid->column('is_public')->switch('',true);
            $grid->column('chapter_or_article_management', '下级管理')->display(function () {
                $documentId = $this->document_id;
                $versionId = $this->id;
                $hasChapters = $this->document->has_chapters;

                if ($hasChapters) {
                    $url = admin_url("chapters?document_id={$documentId}&version_id={$versionId}");
                    return "<a href='{$url}' class='btn btn-sm btn-info'>章节管理</a>";
                } else {
                    $url = admin_url("articles?document_id={$documentId}&version_id={$versionId}");
                    return "<a href='{$url}' class='btn btn-sm btn-success'>文章管理</a>";
                }
            });
            $grid->column('created_at')->sortable();
            $grid->disableViewButton();
            $grid->disableCreateButton();


            // 确保跳转到带有 document_id 的新增页面
            $grid->tools(function (Grid\Tools $tools) {
                $documentId = request()->get('document_id');
                $tools->append("<a class='btn btn-primary' href='".admin_url("documents")."'>返回文档管理</a>");
                $tools->append("<a class='btn btn-primary' href='".admin_url("versions/create?document_id={$documentId}")."'>新增版本</a>");
            });
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
        return Show::make($id, new Version(), function (Show $show) {
            $show->field('id');
            $show->field('document_id');
            $show->field('version_number');
            $show->field('is_public');
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
        return Form::make(new Version(), function (Form $form) {
            $form->display('id');
            $documentId = request()->get('document_id');
            $form->hidden('document_id')->value($documentId);
            $form->text('version_number');
            $form->switch('is_public')
                ->customFormat(function ($v) {
                    return $v == 1 ? 1 : 0;
                })
                ->saving(function ($v) {
                    return $v ? 1 : 0;
                });

            // 去掉`查看`checkbox
            $form->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $form->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $form->disableCreatingCheck();
            $form->display('created_at');
            $form->display('updated_at');
            $form->disableListButton();
        });
    }
}
