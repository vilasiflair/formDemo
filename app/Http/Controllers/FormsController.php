<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormsRequest;
use App\Http\Requests\UpdateFormsRequest;
use App\Models\Forms;
use App\Models\QuestionInputType;
use App\Models\Question_detail;
use Illuminate\Http\Request;
use DB;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.overview');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputTypesData = QuestionInputType::all();
        return view('forms.createForm',compact('inputTypesData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormsRequest $request)
    {
        //
    }

    public function storeFormData(Request $request)
    {
        $form_name = $request->form_name ? $request->form_name :"Form Demo";
        $questionValue = $request->questionValue;
        $questionTypeValue = $request->questionTypeValue;
        $multiOptionsValueData = $request->multiOptionsValueData;
        if((gettype($request->multiOptionsValueData))=='array')
        {
            $multiOptionsValueData = implode(',', $request->multiOptionsValueData);
        }
        
        // $Forms = new Forms();
        /* $update = Forms::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                'form_name' => $form_name,
            ],
        ); */
        $formData = Forms::select('id', 'form_name')->latest()->first();
        dd($formData);
        $form_id = $formData->id;
        $Question_detail = new Question_detail();
        $Question_detail->form_id = $form_id;
        $Question_detail->questionValue = $questionValue;
        $Question_detail->questionTypeValue = $questionTypeValue;
        $Question_detail->ansValueData = $multiOptionsValueData;
        $Question_detail->save();
        $questionInputTypeData = QuestionInputType::where('id',$questionTypeValue)->first();
        $Question_detail['formData'] = $formData;
        $Question_detail['questionInputTypeData'] = $questionInputTypeData;
        $Question_detail['ansValueData'] = '';
        if($Question_detail->ansValueData)
        {
            $Question_detail['ansValueData'] = explode(',',$multiOptionsValueData);
        }
        dd(response()->json($Question_detail));
        return response()->json($Question_detail);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show(Forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit(Forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormsRequest  $request
     * @param  \App\Models\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormsRequest $request, Forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forms $forms)
    {
        //
    }
}
