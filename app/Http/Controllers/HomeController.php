<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Guard;

use App\Notice;
use App\Resource;
use App\Template;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
	const ABOUT_TEMPLATE = '*About';
	const HUMANIST_TEMPLATE = '*Humanist';
	const SESSIONS_TEMPLATE = '*Sessions';
	const CONTACT_TEMPLATE = '*Contact';

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index(Request $request)
	{
		$news = Notice::select(
			array(
				'notices.id',
				'notices.seq',
				'notices.notice',
				'notices.url',
				'notices.deleted_at'
			)
		)
			->orderBy("notices.seq")
			->limit(999)->get();

		$about = Template::where([ 'name' => self::ABOUT_TEMPLATE, 'deleted_at' => null ])->get()->first();
		$aboutText = $about ? $about->container: null;

		$humanist = Template::where([ 'name' => self::HUMANIST_TEMPLATE, 'deleted_at' => null ])->get()->first();
		$humanistText = $humanist ? $humanist->container: null;

		$sessions = Template::where([ 'name' => self::SESSIONS_TEMPLATE, 'deleted_at' => null ])->get()->first();
		$sessionsText = $sessions ? $sessions->container: null;

		$contact = Template::where([ 'name' => self::CONTACT_TEMPLATE, 'deleted_at' => null ])->get()->first();
		$contactText = $contact ? $contact->container: null;

		$loggedIn = false;
		if ($this->auth->check()) {
			$loggedIn = true;
		}

		$newsSectionText = 'News';

		return view('pages.home', compact('aboutText', 'humanistText', 'sessionsText', 'contactText', 'news', 'newsSectionText', 'loggedIn'));
	}

}
