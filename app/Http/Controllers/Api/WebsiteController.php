<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;

class WebsiteController extends BaseController
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('error.', $validator->errors());
        }
        /*--store data in databse--*/
        try {
            $storeWebsite=\App\Models\Website::create($request->all());
            return $this->sendResponse($storeWebsite,'Success');

        } catch (\Throwable $th) {
            throw $th->getMessage();
        }

    }
}
