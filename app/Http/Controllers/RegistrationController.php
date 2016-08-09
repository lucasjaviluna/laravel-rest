<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $meeting_id = $request->input('meeting_id');
      $user_id = $request->input('user_id');

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

      $user = [
        'name' => 'Name'
      ];

      $response = [
        'msg' => 'User registered for Meeting',
        'meeting' => $meeting,
        'user' => $user,
        'unregister' => [
          'href' => 'api/v1/meeting/registration/1',
          'method' => 'DELETE',
        ]
      ]

      return response()->json($response, 200);
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
        'view_meeting' => [
          'href' => 'api/v1/meeting/1',
          'method' => 'GET'
        ]
      ];

      $user = [
        'name' => 'Name'
      ];

      $response = [
        'msg' => 'User unregistered for Meeting',
        'meeting' => $meeting,
        'user' => $user,
        'unregister' => [
          'href' => 'api/v1/meeting/registration',
          'method' => 'POST',
          'params' => 'user_id, meeting_id'
        ]
      ]

      return response()->json($response, 200);
    }
}
