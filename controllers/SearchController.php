<?php
class SearchController extends Controller
{
	public function display()
	{
		if(Session::isAdmin())
			(new SearchView())->render();
		else
    		header("Location: /?p=login");
	}
}
?>
