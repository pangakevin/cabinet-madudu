<?php

namespace App\Admin\Controllers;

use App\Evenement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EvenementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'La galerie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Evenement());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('categorie', __('Categorie'));
        $grid->column('description', __('Description'));
        $grid->column('type', __('Type'));
        $grid->column('urls', __('Url/vidéo'));;
        $grid->column('image', __('Image'));
        $grid->column('date', __('Date '));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Evenement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('categorie', __('Categorie'));
        $show->field('description', __('Description'));
        $show->field('type', __('Type'));
        $show->field('urls', __('Url/vidéo'));
        $show->field('image', __('Image'));
        $show->field('date', __('Date '));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Evenement());

        $form->text('nom', __('Nom'));
        $form->text('categorie', __('Categorie'));
        $form->text('description', __('Description'));
        $form->select('type', __('Types'))->options([1=>'Vidéos',2=>'Images']);
        $form->text('urls', __('Url/vidéo'));
        $form->image('image', __('Image'))->default('images/fondmin.jpg');
        $form->date('date', __('Date'));

        return $form;
    }
}
