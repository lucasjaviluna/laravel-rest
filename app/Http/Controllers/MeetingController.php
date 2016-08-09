<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MeetingController extends Controller
{

    public function __construct() {
      // $this->middleware('name');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $meeting = [
        'title' => 'Title',
        'description' => 'Description',
        'time' => 'time',
        'user_id' => 'User Id',
        'view_meeting' => [
          'href' => 'api/v1/meeting/1',
          'method' => 'GET'
        ]
      ];

      $response = [
        'msg' => 'List of all Meetings',
        'metings' => [
            $meeting,
            $meeting
          ]
      ];

      return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $user_id = $request->input('user_id');

        $meeting = [
          'title' => $title,
          'description' => $description,
          'time' => $time,
          'user_id' => $user_id,
          'view_meeting' => [
            'href' => 'api/v1/meeting/1',
            'method' => 'GET'
          ]
        ];

        $response = [
          'msg' => 'Meeting created',
          'meting' => $meeting
        ];

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $title = $request->input('title');
      $description = $request->input('description');
      $time = $request->input('time');
      $user_id = $request->input('user_id');
      return 'It works';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $meeting = [
        'title' => 'Title',
        'description' => 'Description',
        'time' => 'time',
        'user_id' => 'User Id',
        'create' => [
          'href' => 'api/v1/meeting/1',
          'method' => 'GET'
        ]
      ];

      $response = [
        'msg' => 'Meeting deleted',
        'create' => [
          'href' => 'api/v1/meeting/1',
          'method' => 'POST',
          'params' => 'title, description, time'
        ]
      ];

      return response()->json($response, 200);
    }
}
