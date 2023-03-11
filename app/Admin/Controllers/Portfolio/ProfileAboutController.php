<?php

namespace App\Admin\Controllers\Portfolio;

use App\Models\Portfolio\ProfileAbout;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProfileAboutController extends Controller
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
        $grid = new Grid(new ProfileAbout);

        $grid->id('ID');
        $grid->title('title');
        $grid->description('description')->limit(42);
        $grid->name('name');
        $grid->degree('degree');
        $grid->phone('phone');
        $grid->email('email');
        $grid->address('address');
        $grid->experience('experience');
        $grid->work_mode('work_mode');
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
        $show = new Show(ProfileAbout::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->description('description');
        $show->name('name');
        $show->degree('degree');
        $show->phone('phone');
        $show->email('email');
        $show->address('address');
        $show->experience('experience');
        $show->work_mode('work_mode');
        $show->status('status');
        $show->cb('cb');
        $show->cd('cd');
        $show->ub('ub');
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
        $form = new Form(new ProfileAbout);

        $form->display('ID');
        $form->text('title', 'title');
        $form->text('description', 'description');
        $form->text('name', 'name');
        $form->text('degree', 'degree');
        $form->text('phone', 'phone');
        $form->text('email', 'email');
        $form->text('address', 'address');
        $form->text('experience', 'experience');
        $form->text('work_mode', 'work_mode');
        $form->text('status', 'status');
        $form->text('cb', 'cb');
        $form->text('cd', 'cd');
        $form->text('ub', 'ub');
        $form->text('ud', 'ud');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
