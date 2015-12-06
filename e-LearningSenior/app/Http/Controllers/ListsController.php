<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Todolist;
use App\User;
use App\Category;
use App\Http\Requests\ListCreateFormRequest;

use Event;
use App\Events\ListWasCreated;

class ListsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('listowner', ['only' => ['show', 'edit', 'update']]);
	}

	public function index()
	{
		$lists = User::find(\Auth::id())->lists()->orderBy('created_at', 'desc')->paginate(10);
		return view('lists.index')->withLists($lists);
	}

	/**
	* Presents the list creation form
	*
	*
	*/
	public function create()
	{
		$categories = \DB::table('categories')->lists('name', 'id');

		return view('lists.create')->with('categories', $categories);
	}

	/**
	 * Creates a new list
	 * @param  ListCreateFormRequest
	 * @return [type]
	 */
	public function store(ListCreateFormRequest $request)
	{

	    $list = new Todolist(array(
	      'name' => $request->get('name'),
	      'description' => $request->get('description')
	    ));

	    $list->category()->associate(Category::find($request->get('category')));

	    $user = User::find(\Auth::id());

	    $list = $user->lists()->save($list);

		Event::fire(new ListWasCreated($list));

	    return \Redirect::route('lists.show', 
	    	array($list->id))->with('message', 'Your list has been created!');
	
	}

	/**
	 * Displays a specific list
	 * @param  integer $id The list ID
	 * @return Response
	 */
	public function show($id)
	{
		$list = Todolist::findOrFail($id);
		return view('lists.show')->withList($list);
	}

	/**
	 * Presents the list edit form
	 * @param  integer $id The list ID
	 * @return Response
	 */
	public function edit($id)
	{
        $list = Todolist::findOrFail($id);
        return view('lists.edit')->with('list', $list);
	}

	/**
	 * Update a list
	 * @param  integer $id The list ID
	 * @param  ListCreateFormRequest $request The form request object
	 * @return Response
	 */
	public function update($id, ListCreateFormRequest $request)
	{

        $user = \Auth::user();

        $list = Todolist::findOrFail($id);

        $list->update([
            'name' => $request->get('name'), 
            'description' => $request->get('description')
        ]);

        return \Redirect::route('lists.edit', 
            array($task->todolist->id))->with('message', 'Your list has been updated!');
 
	}

	/**
	 * Delete a list
	 * @param  integer $id The list ID
	 * @return Response
	 */
	public function destroy($id)
	{

        $user = \Auth::user();

        $list = Todolist::findOrFail($id);

        $list->delete();

        return \Redirect::route('lists.index')
            ->with('message', 'Task deleted!');


	}

}
