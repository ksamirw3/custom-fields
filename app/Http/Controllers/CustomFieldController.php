<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\CustomField;
use Illuminate\Support\Facades\Input;

class CustomFieldController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $customFields = CustomField::all();
        return view('customFields.index', compact('customFields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('customFields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $CustomField = Request::all();

        $inputs = Input::only('fieldName', 'fieldType', 'entityId');
        $fieldNames = $inputs['fieldName'];
        $fieldTypes = $inputs['fieldType'];

        foreach ($fieldNames as $key => $n) {
            if ($fieldNames[$key] != '') {
                $CustomField = new CustomField;
                $CustomField->fieldName = $fieldNames[$key];
                $CustomField->fieldType = $fieldTypes[$key];
                $CustomField->entityId = $inputs['entityId'];
//            var_dump($CustomField);
            }

            $CustomField->save();
        }
        return redirect('custom_fields');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $customField = CustomField::find($id);
//        var_dump($customField);exit;
        return view('customFields.edit', compact('customField'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $inputs = Request::all();
        $customField = CustomField::find($id);
        $customField->update($inputs);
        return redirect('custom_fields');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        CustomField::find($id)->delete();
        return redirect('custom_fields');
    }

}
