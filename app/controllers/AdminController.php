<?php
class AdminController extends \BaseController {

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
		return \View::make('admin.subject.create');
	}

	public function store()
	{
		Cache::forever('site_title', Input::get('site_title'));
		Cache::forever('motto_title', Input::get('motto_title'));
		return \Redirect::to('admin');
	}
}