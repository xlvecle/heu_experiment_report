<?php
class SubjectController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function index()
	{
		return \View::make('admin.subject.index', array('subjects' => Subject::all()));
	}

	public function create()
	{
		return \View::make('admin.subject.create');
	}

	public function store()
	{
		$subject = new Subject;
		$subject->title = Input::get('title');
		$subject->info = Input::get('info');
		$subject->save();
		return Redirect::to('admin');
	}
}