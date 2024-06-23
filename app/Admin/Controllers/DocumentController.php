<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Document;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class DocumentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Document(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('slug');
            $grid->column('description');
            $grid->column('cover_image')->image('',100,100);
            $grid->column('has_chapters','区分章节')->switch('red', true);
            $grid->column('auto_numbering','自动编号')->switch('green', true);
            $grid->column('is_public')->switch('yellow', true);
            $grid->column('requires_password','密码访问')->switch('blue', true);
            $grid->column('password');
            $grid->column('created_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

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
        return Show::make($id, new Document(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('slug');
            $show->field('description');
            $show->field('cover_image');
            $show->field('has_chapters');
            $show->field('auto_numbering');
            $show->field('is_public');
            $show->field('requires_password');
            $show->field('password');
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
        return Form::make(new Document(), function (Form $form) {
            $form->block(8,function (Form\BlockForm $form){
                $form->title('基础设置');
                $form->hidden('id');
                $form->text('name')->required()->placeholder('填写文档名称');
                $form->text('slug')->required()->placeholder('填写自定义访问链接');
                $form->textarea('description')->placeholder('填写描述');
                $form->image('cover_image')->placeholder('上传封面');
                // 显示底部提交按钮
                $form->showFooter();
            });
            $form->block(4,function (Form\BlockForm $form){
                $form->title('高级功能');
                $form->row(function (Form\Row $form) {
                    $form->width(3)->switch('has_chapters','区分章节')->customFormat(function ($v) {return $v == 1 ? 1 : 0;})->saving(function ($v) {return $v ? 1 : 0;})->default(0);
                    $form->width(3)->switch('auto_numbering','自动编号')->customFormat(function ($v) {return $v == 1 ? 1 : 0;})->saving(function ($v) {return $v ? 1 : 0;})->default(0);
                    $form->width(3)->switch('is_public')->customFormat(function ($v) {return $v == 1 ? 1 : 0;})->saving(function ($v) {return $v ? 1 : 0;})->default(1);
                    $form->width(3)->switch('requires_password', '密码访问')->customFormat(function ($v) {return $v == 1 ? 1 : 0;})->saving(function ($v) {return $v ? 1 : 0;})->default(0);
                });
                $form->row(function (Form\Row $form) {
                    $form->password('password', '访问密码')->placeholder('请填写访问密码')->help('<span style="color: #FF0000">注意:只有在开启密码访问的情况下其他用户访问文档才需要密码</span>','');
                });
            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
