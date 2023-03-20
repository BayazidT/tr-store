<?php

namespace App\Admin\Controllers\Portfolio;

use App\Models\Portfolio\ProjectInfo;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProjectInfoController extends Controller
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
        $grid = new Grid(new ProjectInfo);

        $grid->id('ID');
        $grid->profile_id('profile_id');
        $grid->project_title('project_title');
        $grid->project_description('project_description');
        $grid->project_image('project_image');
        $grid->project_link('project_link');
        $grid->project_category('project_category');
        $grid->project_url('project_url');
        $grid->status('status');
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
        $show = new Show(ProjectInfo::findOrFail($id));

        $show->id('ID');
        $show->profile_id('profile_id');
        $show->project_title('project_title');
        $show->project_description('project_description');
        $show->project_image('project_image');
        $show->project_link('project_link');
        $show->project_category('project_category');
        $show->project_url('project_url');
        $show->status('status');
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
        $form = new Form(new ProjectInfo);

        $form->text('profile_id', 'profile_id');
        $form->text('project_title', 'project_title');
        $form->text('project_description', 'project_description');
       // $form->text('project_image', 'project_image');
        $form->image('project_image', 'Projects')->move('img', 'test.png')->required();
        $form->text('project_link', 'project_link');
        $form->text('project_category', 'project_category');
        $form->text('status', 'status');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
