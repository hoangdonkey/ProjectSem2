<?php

namespace App\Admin\Controllers;

use App\Models\Donation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DonationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Donation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Donation());

        $grid->column('dnt_id', __('Dnt id'));
        $grid->column('user_id', __('User id'));
        $grid->column('cause_id', __('Cause id'));
        $grid->column('dnt_amount', __('Dnt amount'));
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
        $show = new Show(Donation::findOrFail($id));

        $show->field('dnt_id', __('Dnt id'));
        $show->field('user_id', __('User id'));
        $show->field('cause_id', __('Cause id'));
        $show->field('dnt_amount', __('Dnt amount'));
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
        $form = new Form(new Donation());

        $form->number('user_id', __('User id'));
        $form->number('cause_id', __('Cause id'));
        $form->number('dnt_amount', __('Dnt amount'));

        return $form;
    }
}
