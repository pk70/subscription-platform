<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;

class SubscriberController extends BaseController
{
    /**
     * Create the specified resource.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_website' => 'required|integer|exists:website,id_website',
            'email' => [
                'required',
                'email',
                Rule::unique('subscriber')
                    ->where(function ($query) use ($request) {

                        return $query->where('email', $request->email)
                            ->where('id_website', $request->id_website);
                    })
            ],


        ]);
        if ($validator->fails()) {
            return $this->sendError('error.', $validator->errors());
        }

        /*--store data in databse--*/
        try {
            $storeData = \App\Models\Subscriber::create($request->all());
            return $this->sendResponse($storeData, 'Success');
        } catch (\Exception $th) {
            return $this->sendError('error.', $th->getMessage());
        }
    }
}
