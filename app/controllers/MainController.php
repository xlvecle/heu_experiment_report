<?php
class MainController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function index()
	{
		return \View::make('main.index')->with('subjects', Subject::all());
	}

	public function show($subject)
	{
		return \View::make('main.subject', array('subject' => Subject::where('title', '=', $subject)->firstOrFail(), 'exps' => Exp::where('subject', '=', $subject)->get()));
	}
}