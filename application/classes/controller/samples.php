<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This is the static Kohanut Class that can be used to do various CMS like things through the app.
 *
 * @package    Kohanut
 * @author     Michael Peters
 * @copyright  (c) Michael Peters
 * @license    http://kohanut.com/license
 */
class Controller_Samples extends Controller {
	
	public function action_override()
	{
		// Create the content
		$content = array(
			new View('override'),
			new View('override-column')
		);
		
		// Call Kohanut
		$this->request->response = Kohanut::override('Two Column','samples/override',$content);
		
		// You can manually set the title, and meta data here.
		Kohanut::$page->title = "Sample - Override";
		Kohanut::$page->metadesc = "Description";
	}
	
}