<?php

namespace App\Admin\Controllers\Portfolio;

use App\Models\Portfolio\SkillInfo;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SkillInfoController extends Controller
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
        $grid = new Grid(new SkillInfo);

        $grid->id('ID');
        $grid->profile_id('profile_id');
        $grid->skill_title('skill_title');
        $grid->expertise_level('expertise_level');
        $grid->background_color('background_color');
        $grid->status('status');
        $grid->cb('cb');

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
        $show = new Show(SkillInfo::findOrFail($id));

        $show->id('ID');
        $show->profile_id('profile_id');
        $show->skill_title('skill_title');
        $show->expertise_level('expertise_level');
        $show->background_color('background_color');
        $show->status('status');
        $show->cb('cb');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SkillInfo);

        $form->text('profile_id', 'profile_id');
        $form->text('skill_title', 'skill_title');
        $form->text('expertise_level', 'expertise_level');
        $form->select('background_color')->options(['bg-primary' => 'Green','bg-danger' => 'Red',]);
        $form->text('status', 'status');


        return $form;
    }
}
