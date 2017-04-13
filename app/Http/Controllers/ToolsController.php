<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
//
	public function encode( Request $request = null )
	{
		if (isset( $request->string ))
		{
			$request->string = htmlentities( strtolower( $request->string ) );
		}

		return view('tools.encode', compact('request'));
	}
}
