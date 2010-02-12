<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This is the static Kohanut Class that can be used to do various CMS like things through the app.
 *
 * @package    Kohanut
 * @author     Michael Peters
 * @copyright  (c) Michael Peters
 * @license    http://kohanut.com/license
 */
class Controller_Actions extends Controller {
	
	public function action_contact()
	{
		if ($_POST)
		{
			echo "<div class='notice'>This is a sample website, why are you trying to contact it?</div>";
		}
		$this->request->response = View::factory('contact');
	}
}