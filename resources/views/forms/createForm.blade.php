{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
   <!--  <div class="row">
        <h1>Hello World !!!</h1>
    </div> -->

    <div class="createForm">
        <!--begin::Stepper-->
        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
            
            <!--begin::Content-->
            <div class="flex-row-fluid py-lg-5 px-lg-15">
                <!--begin::Form-->
                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                    <!--begin::Step 1-->
                    <div class="main_form_details">
                        <div class="stepper-label">
                            <h3 class="stepper-title">Form Details</h3>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="form_name" placeholder="Form Details" value="" />
                        </div>
                    </div>
                    <br>

                    <div class="questionDetailBox">
                        <!-- <div class="questionAppend">

                        </div> -->
                        <!-- <div class="questionTypeAppend">
                            
                        </div> -->
                    </div>
                    <div class="question_Details"> 
                        <div class="fv-row mb-10 ">
                            <!--begin::Input-->
                            <div class="question">
                                <input type="text" class="form-control form-control-lg form-control-solid questionValue" name="question" placeholder="Question" value="" />
                            </div>

                            
                            <div class="question_type_dropdown">
                                <select class="form-control question_type questionTypeValue">
                                    @foreach($inputTypesData as $inputType)
                                    <option value="{{$inputType->id}}" data-inputType="{{$inputType->input_type}}">{{$inputType->input_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="appendInput">
                                
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-10">
                        
                        <!--begin::Wrapper-->
                        <div>
                            <!-- <button type="button" class="btn btn-lg btn-primary getDuplicateQuestion" data-kt-stepper-action="submit">
                                <span class="indicator-label">Duplicate</span>
                            </button>
                            <button type="button" class="btn btn-lg btn-primary removeQuestion" data-kt-stepper-action="submit">
                                <span class="indicator-label">Remove</span>
                            </button> -->
                            <button type="button" class="btn btn-lg btn-primary addQuestionRow" data-kt-stepper-action="submit">
                                <span class="indicator-label">Add</span>
                            </button>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Stepper-->
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
                    appendInput+='<div class="removeLastOption"><span>-</span>';
                    appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="Option 1" data-inputType = "'+questionInputTypeValue+'"/><a href="" class="removeMultipleOption"><i class="fa fa-times" aria-hidden="true"></i></a></div>';
                    appendInput+='<div class="multipleOptionAppend"></div>';
                    appendInput+='<div class="lastOption"><span>-</span>';
                    appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid LastMultipleOption multiOption" name="multipleChoice" placeholder="Add Option" value="" /><span>Or </span><a href="">Add "Other"</a></div></div></div>';
                }
                // $('.questionTypeValue').trigger('change');
                $('.appendInput').append(appendInput);
                

                $(".LastMultipleOption").click(function(){
                    var multipleOptionAppend = '';
                    var countOption = $('.multiOption').length;
                    multipleOptionAppend+='<span>-</span>';
                    multipleOptionAppend+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="Option '+ countOption +'" data-inputType = "'+questionInputTypeValue+'"/><a href="" class="removeMultipleOption"><i class="fa fa-times" aria-hidden="true"></i></a></div>';

                    $('.multipleOptionAppend').append(multipleOptionAppend);

                });

            });
            $('.questionTypeValue').trigger('change');

            let i = 1;
            $(".addQuestionRow").click(function(){
                i++;
                var questionValue = $('.questionValue').val();
                var questionTypeValue = $('.questionTypeValue').val();
                var questionValue = questionValue ? questionValue : 'Question';
                var appendInput = $('.appendInput').html();
                // alert("appendInput", appendInput, i);
                // console.log("appendInput::", appendInput, i);
                if(questionTypeValue == 3)
                {
                    setTimeout(() => {
                        // var appendInput = $("appendInput div:last").remove();
                        var aaaaaaaaa = $(".questionDetailBox .lastOption").hide();
                        // var $inputs = $('.removeLastOption input:not(.lastOption input)').html();

                        // var appendInput = appendInput.html();
                        console.log("lastOptionInput:::", aaaaaaaaa.html());
                        appendInput = $('.appendInput').html();
                        console.log("appendInput:::", appendInput);
                    }, 500);
                }
                    
                // console.log("appendInput",appendInput);
                var questionTypeValue = $('.questionTypeValue').attr("data-inputtype");
                var questionTypeAppend = '';
                questionTypeAppend+='<div class="questionAppend"><span>'+questionValue+'</span></div>'+appendInput+'</div><div><a href="" class="btn getDuplicateQuestion"><i class="fa fa-clone"></i></a><a href="javascript:void(0)" class="btn removeQuestion"><i class="fa fa-trash"></i></a><label for="required_toggle">Required </label><input type="checkbox" value="1" checked></div>';

                $('.questionDetailBox').append(questionTypeAppend);
                $('.questionValue').val('');
                // $('.questionTypeValue').val('');

            });

            $(".removeQuestion").click(function(e){
                e.preventDefault();
                alert("test");
                $(this).parent(".questionDetailBox").remove();
                // var aaaaaaaaa = $(".questionDetailBox .lastOption").hide();
            });
            
        });
    </script>
@endsection
