<?php namspace App\Http\Composers;

use Illuminate\Contracts\View\View;

class NavigationComposer
{

	public function __construct(CoursesRepository $courses)
	{

	}

	public function compose(View $view)
	{
		// $view->with('latest', $this->courses->ofRatedType()); // TODO
		// $view->with('latest', $this->courses->ofMostWatchedType()); // TODO
	}
	
}