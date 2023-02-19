<?php

namespace App\Admin\Controllers;

use App\Annonce;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Categorie;

class AnnonceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les Articles';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Annonce());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('titre', __('Titre'))->filter('like');
        $grid->column('versions', __('Version'))->filter('like');
        $grid->column('description', __('Description'))->filter('like');


        $grid->categorie_id('Categorie')->display(function($categorie_id){
            $res = Categorie::find($categorie_id);
            return $res->nom;
        });
        // ->filter('like');

        $grid->column('image', __('Image'))->image();
        $grid->column('created_at', __('Created at'))->date('d.m.Y');
        $grid->column('updated_at', __('Updated at'));
        // ->filter('datetime');
        // $grid->column('image')->downloadable();

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
        $show = new Show(Annonce::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titre', __('Titre'));
        $show->field('versions', __('Version'));
        $show->field('description', __('Description'));
        $show->field('categorie_id', __('Categorie id'));
        $show->field('image', __('Image'))->image();
        // $show->image->image();
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
        $form = new Form(new Annonce());

        $collectionCat = Categorie::get(['nom','id']);
        $plukedCat = [];
        foreach ($collectionCat as $item){
            $plukedCat[$item->id] = $item->nom;
        }

        $form->text('titre', __('Titre'));
        $form->hidden('slug', __('Slug'))->value($this->title);
        // $form->save(function($form) {
        //     $form->slug=$form->title ;
        // });
        // $form->textarea('description', __('Description'));
        
        $form->select('versions', __('Versions'))->options([1=>'Française',2=>'Anglaise']);
        $form->ckeditor('description', __('Description'));

        //$form->number('categorie_id', __('Categorie id'));

        $form->select('categorie_id', __('Categorie'))->options($plukedCat)->required();
        $form->image('image', __('Image'))->default('user.png');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));
        

        return $form;
    }
}
