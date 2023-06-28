<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormsRequest;
use App\Http\Requests\UpdateFormsRequest;
use App\Models\Forms;
use App\Models\QuestionInputType;
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
        dd($request);
        $form_name = $request->form_name;
        $questionValue = $request->questionValue;
        $questionTypeValue = $request->questionTypeValue;
        
        $Forms = new Forms();
        $Forms->form_name = $form_name;
        $Forms->save();

        $QuestionInputType = new QuestionInputType();
        $QuestionInputType->questionValue = $questionValue;
        $QuestionInputType->questionTypeValue = $questionTypeValue;
        $QuestionInputType->save();
        return response()->json($QuestionInputType);
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
