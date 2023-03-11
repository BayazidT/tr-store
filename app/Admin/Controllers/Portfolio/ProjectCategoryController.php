<?php

namespace App\Admin\Controllers\Portfolio;

use App\Models\Portfolio\ProjectCategory;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProjectCategoryController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectCategory);

        $grid->id('ID');
        $grid->profile_id('profile_id');
        $grid->category_name('category_name');
        $grid->category_slug('category_slug');
        $grid->status('status');
        $grid->cb('cb');
        $grid->ub('ub');
        $grid->cd('cd');
        $grid->ud('ud');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

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
        $show = new Show(ProjectCategory::findOrFail($id));

        $show->id('ID');
        $show->profile_id('profile_id');
        $show->category_name('category_name');
        $show->category_slug('category_slug');
        $show->status('status');
        $show->cb('cb');
        $show->ub('ub');
        $show->cd('cd');
        $show->ud('ud');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectCategory);

        $form->display('ID');
        $form->text('profile_id', 'profile_id');
        $form->text('category_name', 'category_name');
        $form->text('category_slug', 'category_slug');
        $form->text('status', 'status');
        $form->text('cb', 'cb');
        $form->text('ub', 'ub');
        $form->text('cd', 'cd');
        $form->text('ud', 'ud');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
