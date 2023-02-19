<?php

namespace App\Admin\Controllers;

use App\Document;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DocumentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Documents';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Document());

        // $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('type', __('Types'));
        // $grid->file('pdf', __('Document'))->downloadable();
        $grid->column('date', __('Date '));
        // $grid->column('updated_at', __('Mise à jour'));

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
        $show = new Show(Document::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('pdf', __('Document'));
        $show->field('type', __('Types'));
        $show->field('date', __('Date '));
        // $show->field('updated_at', __('Mise à jour'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Document());

        $form->text('nom', __('Nom'));
        $form->file('pdf', __('Pdf'))->options(['previewFileType'=>'pdf']);
        $form->text('type', __('Types'));
        $form->date('date', __('Date'));

        return $form;
    }
}
