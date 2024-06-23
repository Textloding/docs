<?php

namespace App\Admin\Actions\Grid;

use Dcat\Admin\Grid\Displayers\Actions;

/**
 * 重写行操作按钮样式
 */
class TextActions extends Actions
{

    /**
     * @return string
     */
    protected function getViewLabel()
    {
        $label = trans('admin.show');
        return '<button class="btn btn-sm btn-success"><i class="feather icon-eye"></i> ' . $label . '</button>  ';
    }

    /**
     * @return string
     */
    protected function getEditLabel()
    {
        $label = trans('admin.edit');

        return '<button class="btn btn-sm btn-custom"><i class="feather icon-edit-1"></i> ' . $label . '</button>  ';
    }

    /**
     * @return string
     */
    protected function getQuickEditLabel()
    {
        $label = trans('admin.edit');
        $label2 = trans('admin.quick_edit');

        return '<button class="btn btn-sm btn-custom" title="' . $label2 . '"><i class="feather icon-edit-1"></i> ' . $label . '</button>  ';
    }

    /**
     * @return string
     */
    protected function getDeleteLabel()
    {
        $label = trans('admin.delete');

        return '<button class="btn btn-sm btn-danger"><i class="feather icon-alert-triangle"></i> ' . $label . '</button>  ';
    }
}
