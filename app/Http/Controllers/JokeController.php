<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class JokeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// $jokes = Joke::all();
			$jokes = Joke::simplePaginate(2);
		// $jokes = Joke::paginate(2);
		// dump($jokes);
		return view('jokes.index', compact('jokes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('jokes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data = $request->all();
		// dump($data);

		$joke = new Joke();

		// $joke->author = $data['author'];
		// $joke->body = $data['body'];
		// $joke->title = $data['title'];

		$joke->fill($data);

		$joke->save();

		return redirect()->route('jokes.show', $joke->id);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$joke = Joke::find($id);
		// dump($joke);

		if($joke) {
			return view('jokes.show', compact('joke'));
		}

		abort(404);
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$edit_joke = Joke::find($id);

		// dump($edit_joke);
		return view('jokes.edit', compact('edit_joke'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$data = $request->all();
		// dump($data);

		$joke = Joke::find($id);

		$joke->update($data);

		return redirect()->route('jokes.show', $joke->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$joke = Joke::find($id);

		$joke->delete();

		return redirect()->route('jokes.index')->with('delete', $joke->title);
	}
}
