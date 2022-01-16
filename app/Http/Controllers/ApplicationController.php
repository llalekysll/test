<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $Applications = Application::all()->toArray();
        return array_reverse($Applications);
    }

    public function store(Request $request)
    {
        $Application = new Application([
            'user_id' => $request->input('user_id'),
            'role_current_id' => $request->input('role_current_id'),
            'role_request_id' => $request->input('role_request_id'),
            'category_current' => $request->input('category_current'),
            'expired_at' => $request->input('expired_at'),
            'order_info' => $request->input('order_info'),
            'order_date' => $request->input('order_date'),
            'experience_total' => $request->input('experience_total'),
            'experience_role' => $request->input('experience_role'),
            'experience_org' => $request->input('experience_org'),
            'category_request' => $request->input('category_request'),
            'agreement_procedure' => $request->input('agreement_procedure'),
            'agreement_personal_data' => $request->input('agreement_personal_data'),
            'given_at' => $request->input('given_at'),
            'error' => $request->input('error'),
            'accepted_at' => $request->input('accepted_at'),
            'uploaded_at' => $request->input('uploaded_at'),
        ]);
        $Application->save();

        return response()->json('Application created!');
    }

    public function show($id)
    {
        $Application = Application::find($id);
        return response()->json($Application);
    }

    public function update($id, Request $request)
    {
        $Application = Application::find($id);
        $Application->update($request->all());

        return response()->json('Application updated!');
    }

    public function destroy($id)
    {
        $Application = Application::find($id);
        $Application->delete();

        return response()->json('Application deleted!');
    }
}
