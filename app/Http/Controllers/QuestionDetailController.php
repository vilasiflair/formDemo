<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestion_detailRequest;
use App\Http\Requests\UpdateQuestion_detailRequest;
use App\Models\Question_detail;

class QuestionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestion_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestion_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question_detail  $question_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Question_detail $question_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question_detail  $question_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Question_detail $question_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestion_detailRequest  $request
     * @param  \App\Models\Question_detail  $question_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestion_detailRequest $request, Question_detail $question_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question_detail  $question_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question_detail $question_detail)
    {
        //
    }
}
