<?php
class ExpController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function index()
	{
		return \View::make('admin.index', array('subjects' => Subject::all(), 'exps' => Exp::all()));
	}

	public function create()
	{
		return \View::make('admin.exp.create');
	}

	public function store()
	{
		$exp = new Exp;
		$exp->name = Input::get('name');
		$exp->info = Input::get('info');
		$exp->subject = Input::get('subject');
		$exp->save();
		return Redirect::to('admin');
	}
}