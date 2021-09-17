<?php

namespace App\Admin\Controllers;

use App\Models\Causes;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CauseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Causes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Causes());

        $grid->column('cause_id', __('Cause id'));
        $grid->column('cause_title', __('Cause title'));
        $grid->column('category', __('Category'));
        $grid->column('description', __('Description'));
        $grid->column('goal', __('Goal'));
        $grid->column('total_amount', __('Total amount'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Causes::findOrFail($id));

        $show->field('cause_id', __('Cause id'));
        $show->field('cause_title', __('Cause title'));
        $show->field('category', __('Category'));
        $show->field('description', __('Description'));
        $show->field('goal', __('Goal'));
        $show->field('total_amount', __('Total amount'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Causes());

        $form->text('cause_title', __('Cause title'));
        $form->text('category', __('Category'));
        $form->textarea('description', __('Description'));
        $form->number('goal', __('Goal'));
        $form->number('total_amount', __('Total amount'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
