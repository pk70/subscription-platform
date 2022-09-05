<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;

class PostController extends BaseController
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'id_website' => 'required|integer|exists:website,id_website',
            'title' => 'required|string|max:40',
            'description' => 'required|string|max:200',
        ]);
        if ($validator->fails()) {
            return $this->sendError('error.', $validator->errors());
        }

         /*--store data in databse--*/
         try {

            $storeData=\App\Models\WebsitePost::create($request->all());
            return $this->sendResponse($storeData,'Success');

        } catch (\Exception $th) {
            return $this->sendError('error.', $th->getMessage());
            throw $th->getMessage();
        }

    }
}
