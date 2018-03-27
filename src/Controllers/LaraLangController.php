<?php
namespace YHShanto\LaraLang\Controllers;

use App\Http\Controllers\Controller;
use Session;

class LaraLangController extends Controller {
	
	public function change($lang)

	{

		$languages = config('laralang.languages');

		if (in_array($lang, $languages)) {

			session(['lara-lang' => $lang]);

		}

		return redirect()->back();

	}
}