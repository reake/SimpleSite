<?php

/**
 * Manage Dashboard
 * Class Controller_Manage_Dashboard
 */
class Controller_Manage_Dashboard extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'dashboard';
	}
}