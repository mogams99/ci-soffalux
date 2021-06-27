<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Web Company Profile - PT. Soffalux Berkah Jaya'
		];

		return view('content/main', $data);
	}
}
