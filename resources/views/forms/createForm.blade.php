{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
   <!--  <div class="row">
        <h1>Hello World !!!</h1>
    </div> -->

    <div class="createForm">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row g-xxl-9">
                                <div class="col-xxl-9">
                                    <div class="d-flex align-self-center">
                                        <div class="flex-grow-1 ">
                                            <h3 class="text-gray-800">Form Details</h3>
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="form_name" placeholder="Form Details" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row g-xxl-9">
                                <div class="col-xxl-9">
                                    <div class="d-flex align-self-center">
                                        <div class="flex-grow-1 ">
                                            <h6 class="text-gray-800 mb-5">Add Questions</h6>
                                            <div class="questionDetailBox  mb-10">
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="question_Details">
                                <div class="row g-xxl-9  mb-5">
                                    <div class="col-xxl-9">
                                        <div class="d-flex align-self-center">
                                            <div class="flex-grow-1 ">
                                                <div class="question">
                                                    <input type="text" class="form-control form-control-lg form-control-solid questionValue" name="question" placeholder="Question" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-xxl-9 mb-5">
                                    <div class="col-xxl-9">
                                        <div class="d-flex align-self-center">
                                            <div class="flex-grow-1 ">
                                                <div class="question_type_dropdown">
                                                    <select class="form-control question_type questionTypeValue">
                                                        <option value="">Select Question Type</option>
                                                        @foreach($inputTypesData as $inputType)
                                                        <option value="{{$inputType->id}}" data-inputType="{{$inputType->input_type}}">{{$inputType->input_type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="appendInput">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-10">
                        <div>
                            <button type="button" class="btn btn-primary addQuestionRow" data-kt-stepper-action="submit">Add
                            </button>
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
        
        $(document).ready(function(){

            $(".questionTypeValue").change(function(){
                var questionTypeValue = $('.questionTypeValue').val();
                var questionInputTypeValue = $(this).attr('data-inputType');
                $('.appendInput').empty();
                var appendInput = '';
                if(questionTypeValue == 1)
                {
                    appendInput+='<div class="question_type_options"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Question Text" value="" data-inputType = "'+questionInputTypeValue+'"/></div>';
                }
                else if(questionTypeValue == 2)
                {
                    appendInput+='<div class="question_type_options"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="paragraph" placeholder="Paragraph Text" value="" data-inputType = "'+questionInputTypeValue+'"/></div>';
                }
                else if(questionTypeValue == 3)
                {
                    appendInput+='<div class="removeLastOption">';
                    appendInput+='<div class="row mb-2">';
                    appendInput+='<div class="col-md-1">';
                    appendInput+='<span>-</span>';
                    appendInput+='</div>';
                    appendInput+='<div class="col-md-10">';
                    appendInput+='<div class="question_type_options first_multiple_option">';
                    appendInput+='<input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="Option 1" data-inputType = "'+questionInputTypeValue+'"/>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='<div class="col-md-1">';
                    appendInput+='<a href="javascript:void(0)" class="removeMultipleOption">';
                    appendInput+='<i class="fa fa-times" aria-hidden="true"></i>';
                    appendInput+='</a>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='<div class="multipleOptionAppend"></div>';
                    appendInput+='<div class="lastOption">';
                    appendInput+='<div class="row">';
                    appendInput+='<div class="col-md-1">';
                    appendInput+='<span>-</span>';
                    appendInput+='</div>';
                    appendInput+='<div class="col-md-2">';
                    appendInput+='<div class="question_type_options">';
                    appendInput+='<a href="javascript:void(0)" class="btn btn-primary form-control form-control-sm form-control-solid multiOption LastMultipleOption" name="multipleChoice" >Add Option</a>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';

                }
                $('.appendInput').append(appendInput);
                

                $(".LastMultipleOption").click(function(){
                    var multipleOptionAppend = '';
                    var countOption = $('.appendInput .multiOption').length;

                    multipleOptionAppend+='<div class="row mb-2 middleOptions">';
                    multipleOptionAppend+='<div class="col-md-1">';
                    multipleOptionAppend+='<span>-</span>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='<div class="col-md-10">';
                    multipleOptionAppend+='<div class="question_type_options">';
                    multipleOptionAppend+='<input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="Option '+ countOption +'" data-inputType = "'+questionInputTypeValue+'"/>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='<div class="col-md-1">';
                    multipleOptionAppend+='<a href="javascript:void(0)" class="removeMultipleOption">';
                    multipleOptionAppend+='<i class="fa fa-times" aria-hidden="true"></i>';
                    multipleOptionAppend+='</a>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='</div>';


                    /* multipleOptionAppend+='<span>-</span>';
                    multipleOptionAppend+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="Option '+ countOption +o'" data-inputType = "'+questionInputTypeValue+'"/><a href="" class="removeMultipleOption"><i class="fa fa-times" aria-hidden="true"></i></a></div>'; */

                    $('.appendInput .multipleOptionAppend').append(multipleOptionAppend);

                });

            });
            $('.questionTypeValue').trigger('change');

            $(".addQuestionRow").click(function(){
                
                var questionValue = $('.questionValue').val();
                var questionTypeValue = $('.questionTypeValue').val();
                var questionValue = questionValue ? questionValue : 'Question';
                var appendInput = $('.appendInput').html();
                
                if(questionTypeValue == 3)
                {
                    setTimeout(() => {
                        $(".questionDetailBox .lastOption").hide();
                        appendInput = $('.appendInput').html();
                    }, 500);
                }
                    
                var questionTypeValue = $('.questionTypeValue').attr("data-inputtype");
                var questionTypeAppend = '';

                questionTypeAppend+='<div class="card mb-5">';
                questionTypeAppend+='<div class="card-body">';
                questionTypeAppend+='<div class="question_Details">';
                questionTypeAppend+='<div class="row mb-5">';
                questionTypeAppend+='<div class="col-md-8">';
                questionTypeAppend+='<div class="questionAppend">'+questionValue+'</div>';
                questionTypeAppend+='</div>';
                questionTypeAppend+='<div class="col-md-4">';
                questionTypeAppend+='<a href="javascript:void(0)" class="btn getDuplicateQuestion">';
                questionTypeAppend+='<i class="fa fa-clone"></i>';
                questionTypeAppend+='</a>';
                questionTypeAppend+='<a href="javascript:void(0)" class="btn removeQuestion">';
                questionTypeAppend+='<i class="fa fa-trash"></i>';
                questionTypeAppend+='</a>';
                questionTypeAppend+='<label for="required_toggle">Required </label>';
                questionTypeAppend+='<input type="checkbox" value="1" checked>';
                questionTypeAppend+='</div>';
                questionTypeAppend+='</div>';

                questionTypeAppend+='<div class="row  mb-5">';
                questionTypeAppend+='<div class="col-md-12"> '+appendInput+' </div>';
                questionTypeAppend+='</div>'; 
                questionTypeAppend+='</div>';
                questionTypeAppend+='</div>';
                questionTypeAppend+='</div>';

                /* questionTypeAppend+='<div class="questionAppend"><span>'+questionValue+'</span></div>'+appendInput+'</div><div><a href="" class="btn getDuplicateQuestion"><i class="fa fa-clone"></i></a><a href="javascript:void(0)" class="btn removeQuestion"><i class="fa fa-trash"></i></a><label for="required_toggle">Required </label><input type="checkbox" value="1" checked></div>'; */

                $('.questionDetailBox').append(questionTypeAppend);
                $('.questionValue').val('');
                // $(".appendInput .middleOptions").remove();
                $('.appendInput').empty();
                $('.questionTypeValue').val('');

            });

            removeMultipleOption
            
            $(".removeMultipleOption").click(function(e){
                e.preventDefault();
                alert("test");
                $(this).parent(".questionDetailBox").remove();
            });
            
        });
    </script>
@endsection
