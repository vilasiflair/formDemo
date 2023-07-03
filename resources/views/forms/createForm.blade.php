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
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="form_data">
                                <div class="row g-xxl-9">
                                    <div class="col-xxl-9">
                                        <!-- <div class="d-flex align-self-center"> -->
                                            <!-- <div class="flex-grow-1 "> -->
                                                <!-- <h3 class="text-gray-800">Form Details</h3> -->
                                                <input type="hidden" name="form_id" class="form_id">
                                                <input type="text" class="form-control form-control-lg form-control-solid form_name" name="form_name" placeholder="New Form" value="" required/>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-xxl-9">
                                        <!-- <div class="d-flex align-self-center"> -->
                                            <!-- <div class="flex-grow-1 "> -->
                                                <!-- <h3 class="text-gray-800">Form Details</h3> -->
                                                <input type="hidden" name="form_id" class="form_id">
                                                <input type="text" class="form-control form-control-lg form-control-solid form_name" name="form_name" placeholder="New Form" value="" required/>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row g-xxl-9">
                                    <div class="col-xxl-9">
                                        <div class="d-flex align-self-center">
                                            <div class="flex-grow-1 ">
                                                <!-- <h3 class="text-gray-800">Form Details</h3> -->
                                                <input type="text" class="form-control form-control-lg form-control-solid form_detail" name="form_detail" placeholder="Form Details" value="" required/>
                                            </div>
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


                                                <!-- <div class="card mb-5 questionRow">
                                                    <div class="card-body">
                                                        <div class="question_Details">
                                                            <div class="row mb-5">
                                                                <div class="col-md-8">
                                                                    <div class="questionAppend">                 <span>'+questionValue+'</span>  
                                                                        <input type="hidden" value='+questionValue+' name="question" class="editableQuestion form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="javascript:void(0)" class="btn getDuplicateQuestion">
                                                                        <i class="fa fa-clone"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="btn updateQuestion">
                                                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="btn editQuestion">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="btn removeQuestion">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                    <label for="required_toggle">Required </label>
                                                                    <input type="checkbox" value="1" checked>
                                                                </div>
                                                            </div>
                                
                                                            <div class="row  mb-5">
                                                                <div class="col-md-12">
                                                                    <div class="question_type_options col-md-11">                              <input readonly type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Answer Text" value="" data-inputType = "'+questionInputType+'"/>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                
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
                            <!-- <button type="button" class="btn btn-primary addQuestionRow" data-kt-stepper-action="submit">Add
                            </button> -->
                            <a href="javascript:void(0)" data-kt-stepper-action="submit" class="btn btn-primary addQuestionRow">Add</a>
                            <a href="javascript:void(0)" data-kt-stepper-action="submit" class="btn btn-primary addQuestionRow2">Add</a>
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
        function removeOption() {
            $(".removeMultipleOption").click(function(e){
                e.preventDefault();
                $(this).parents(".middleOptions, .middleOptionFirst").remove();
            });
        }

        function storeData()
        {
            alert("storeData");
            return;
            var form_name = $('.form_name').val();
            var questionValue = $('.questionValue').val();
            var questionValue = questionValue ? questionValue : 'Question';
            var questionTypeValue = $('.questionTypeValue').val();
            
            var appendInput = $('.appendInput').html();
            let _token = $("input[name=_token]").val();
            let multiOptionsValueData = [];
            
            if(questionTypeValue == 3)
            {
                // setTimeout(() => {
                $(".questionDetailBox .lastOption").hide();
                $(".questionDetailBox .removeMultipleOption").hide();
                appendInput = $('.appendInput').html();
                $(".removeLastOption :input").each(function(){
                    input = $(this).val();
                    console.log("input::==", $(this));
                    console.log("inputVal::==", input);
                    multiOptionsValueData.push(input);
                });
                // }, 300);
            }
                
            if(questionTypeValue){
                $.ajax({
                    url: "{{route('storeFormData')}}",
                    type:"POST" ,
                    data: {
                        // form_id : form_id,
                        form_name : form_name,
                        questionValue : questionValue,
                        questionTypeValue : questionTypeValue,
                        multiOptionsValueData : multiOptionsValueData,
                        _token:_token
                    },
                    success:function(response)
                    {
                        $(".question_Details .questionValue").val("");
                        if(response){
                            $(".form_id").val(response.form_id);
                            $(".form_name").val(response.form_name);
                            var questionValue = response.questionValue;
                            var questionTypeValue = response.questionTypeValue;
                            var questionInputType = response.questionInputTypeData.input_type;
                            
                            var questionTypeAppend = '';
                            questionTypeAppend+='<div class="card mb-5 questionRow">';
                            questionTypeAppend+='<div class="card-body">';
                            questionTypeAppend+='<div class="question_Details">';
                            questionTypeAppend+='<div class="row mb-5">';
                            questionTypeAppend+='<div class="col-md-8">';
                            questionTypeAppend+='<div class="questionAppend">                 <span>'+questionValue+'</span>';  
                            questionTypeAppend+='<input type="hidden" value='+questionValue+' name="question" class="editableQuestion form-control">';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='<div class="col-md-4">';
                            questionTypeAppend+='<a href="javascript:void(0)" class="btn getDuplicateQuestion">';
                            questionTypeAppend+='<i class="fa fa-clone"></i>';
                            questionTypeAppend+='</a>';
                            questionTypeAppend+='<a href="javascript:void(0)" class="btn updateQuestion">';
                            questionTypeAppend+='<i class="fa fa-archive" aria-hidden="true"></i>';
                            questionTypeAppend+='</a>';
                            questionTypeAppend+='<a href="javascript:void(0)" class="btn editQuestion">';
                            questionTypeAppend+='<i class="fas fa-edit"></i>';
                            questionTypeAppend+='</a>';
                            questionTypeAppend+='<a href="javascript:void(0)" class="btn removeQuestion">';
                            questionTypeAppend+='<i class="fa fa-trash"></i>';
                            questionTypeAppend+='</a>';
                            questionTypeAppend+='<label for="required_toggle">Required </label>';
                            questionTypeAppend+='<input type="checkbox" value="1" checked>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            
                            questionTypeAppend+='<div class="row  mb-5">';
                            questionTypeAppend+='<div class="col-md-12">';
                            questionTypeAppend+='<div class="question_type_options col-md-11"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Answer Text" value="" />';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            questionTypeAppend+='</div>';
                            
                            console.log("questionTypeAppend::==", questionTypeAppend);
                            $('.questionDetailBox').append(questionTypeAppend);
                        }
                    }
                });
                $(".addQuestionRow2").show();
                $(".addQuestionRow").hide();
            }
        }

        /* function addDuplicateQuestion() {
            $(".getDuplicateQuestion").off("click");
            $(".getDuplicateQuestion").on("click", function(e){
                e.preventDefault();
                let rowHtml = '';
                rowHtml = $(this).parents(".questionRow").html();
                console.log("rowHtml:::: ===",rowHtml);
                $(this).parents(".questionDetailBox .questionRow").after('<div class="card mb-5 questionRow">'+rowHtml+'</div>');
            });
        } */

        $(document).on('click', '.getDuplicateQuestion', function(event) {
            event.preventDefault();
            let rowHtml = '';
            rowHtml = $(this).parents(".questionRow").html();
            console.log("rowHtml:::: ===",rowHtml);
            $(this).parents(".questionDetailBox .questionRow").after('<div class="card mb-5 questionRow">'+rowHtml+'</div>');
        });
        
        $(document).on('click', '.editQuestion', function(event) {
            event.preventDefault();
            $(".questionRow .question_Details").find(".updateQuestion").hide();
            $(".questionRow .question_Details").find(".editQuestion").show();
            
            $(".questionRow .question_Details").find('input').attr("readonly", true);
            $(".questionRow .question_Details").find('.questionAppend input').attr("type", "hidden");
            $(".questionRow .question_Details").find('.questionAppend span').show();
            
            $(this).parents(".question_Details").find(".updateQuestion").show();
            $(this).closest(".editQuestion").hide();
            $(this).parents(".question_Details").find('.removeLastOption input').attr("readonly", false);
            $(this).parents(".question_Details").find('.questionAppend input').attr("readonly", false);
            $(this).parents(".question_Details").find('.questionAppend input').attr("type", "text");
            $(this).parents(".question_Details").find('.questionAppend span').hide();
        });

        /* $(".addQuestionRow").one('click', function (event) {
            alert("hello");
            $( this ).off( event );
            createForm();
        }); */

        function createForm() {
            var form_name = $('.form_name').val();
            let _token = $("input[name=_token]").val();
                
            $.ajax({
                url: "{{route('createForm')}}",
                type:"POST" ,
                data: {
                    form_name : form_name,
                    _token:_token
                },
                success:function(response)
                {
                    $(".form_id").val(response.id);
                }
            });
        }
        $(document).ready(function(){
            $(".addQuestionRow2").hide();
            $(".questionTypeValue").change(function(){
                var questionTypeValue = $('.questionTypeValue').val();
                var questionInputTypeValue = $(this).attr('data-inputType');
                $('.appendInput').empty();
                var appendInput = '';
                if(questionTypeValue == 1)
                {
                    appendInput+='<div class="question_type_options col-md-11"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Answer Text" value="" data-inputType = "'+questionInputTypeValue+'"/></div>';
                }
                else if(questionTypeValue == 2)
                {
                    appendInput+='<div class="question_type_options col-md-11"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="paragraph" placeholder="Paragraph Text" value="" data-inputType = "'+questionInputTypeValue+'"/></div>';
                }
                else if(questionTypeValue == 3)
                {
                    appendInput+='<div class="removeLastOption">';
                    appendInput+='<div class="row mb-2 middleOptionFirst">';
                    appendInput+='<div class="col-md-1">';
                    appendInput+='<span>-</span>';
                    appendInput+='</div>';
                    appendInput+='<div class="col-md-10">';
                    appendInput+='<div class="question_type_options first_multiple_option">';
                    appendInput+='<input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="" data-inputType = "'+questionInputTypeValue+'" placeholder="Option 1" required="required"/>';
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
                    appendInput+='<a href="javascript:void(0)" class="btn btn-primary form-control form-control-sm form-control-solid multiOption LastMultipleOption">Add Option</a>';
                   /*  appendInput+='<input type="submit" class="btn btn-primary form-control form-control-sm form-control-solid multiOption LastMultipleOption" value="Add Option">'; */
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';
                    appendInput+='</div>';

                }
                $('.appendInput').append(appendInput);
                

                $(".LastMultipleOption").click(function(event){
                    event.preventDefault();
                    var multipleOptionAppend = '';
                    var countOption = $('.appendInput .multiOption').length;
                   
                    multipleOptionAppend+='<div class="row mb-2 middleOptions">';
                    multipleOptionAppend+='<div class="col-md-1">';
                    multipleOptionAppend+='<span>-</span>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='<div class="col-md-10">';
                    multipleOptionAppend+='<div class="question_type_options">';
                    multipleOptionAppend+='<input type="text" class="form-control form-control-lg form-control-solid multiOption" name="multipleChoice" value="" data-inputType = "'+questionInputTypeValue+'" placeholder="Option '+ countOption +'" required="required" />';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='<div class="col-md-1">';
                    multipleOptionAppend+='<a href="javascript:void(0)" class="removeMultipleOption">';
                    multipleOptionAppend+='<i class="fa fa-times" aria-hidden="true"></i>';
                    multipleOptionAppend+='</a>';
                    multipleOptionAppend+='</div>';
                    multipleOptionAppend+='</div>';

                    $('.appendInput .multipleOptionAppend').append(multipleOptionAppend);

                    removeOption();

                });

            });
            $('.questionTypeValue').trigger('change');

            $(".addQuestionRow").on('click', function(){
                storeData();
            });  
            
            $(".form_data").on('change', function(){
                alert("formData");
                storeData();
            }); 
            
            $(".addQuestionRow2").click(function(){
                
                var form_name = $('.form_name').val();
                var form_id = $('.form_id').val();
                
                var questionValue = $('.questionValue').val();
                var questionValue = questionValue ? questionValue : 'Question';
                var questionTypeValue = $('.questionTypeValue').val();
                
                var appendInput = $('.appendInput').html();
                let _token = $("input[name=_token]").val();
                let multiOptionsValueData = [];
                
                if(questionTypeValue == 3)
                {
                    // setTimeout(() => {
                    $(".questionDetailBox .lastOption").hide();
                    $(".questionDetailBox .removeMultipleOption").hide();
                    appendInput = $('.appendInput').html();
                    $(".removeLastOption :input").each(function(){
                        input = $(this).val();
                        console.log("input::==", $(this));
                        console.log("inputVal::==", input);
                        multiOptionsValueData.push(input);
                    });
                    // }, 300);
                }
                   
                if(questionTypeValue){
            
                    $.ajax({
                        url: "{{route('storeFormData')}}",
                        type:"POST" ,
                        data: {
                            form_id : form_id,
                            form_name : form_name,
                            questionValue : questionValue,
                            questionTypeValue : questionTypeValue,
                            multiOptionsValueData : multiOptionsValueData,
                            _token:_token
                        },
                        success:function(response)
                        {
                            $(".question_Details .questionValue").val("");
                            console.log("response::==", response);
                            if(response)
                            {
                                $(".form_id").val(response.form_id);
                                $(".form_name").val(response.form_name);
                                var questionValue = response.questionValue;
                                var questionTypeValue = response.questionTypeValue;
                                var questionInputType = response.questionInputTypeData.input_type;
                                
                                var questionTypeAppend = '';
                                questionTypeAppend+='<div class="card mb-5 questionRow">';
                                questionTypeAppend+='<div class="card-body">';
                                questionTypeAppend+='<div class="question_Details">';
                                questionTypeAppend+='<div class="row mb-5">';
                                questionTypeAppend+='<div class="col-md-8">';
                                questionTypeAppend+='<div class="questionAppend">                 <span>'+questionValue+'</span>';  
                                questionTypeAppend+='<input type="hidden" value='+questionValue+' name="question" class="editableQuestion form-control">';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='<div class="col-md-4">';
                                questionTypeAppend+='<a href="javascript:void(0)" class="btn getDuplicateQuestion">';
                                questionTypeAppend+='<i class="fa fa-clone"></i>';
                                questionTypeAppend+='</a>';
                                questionTypeAppend+='<a href="javascript:void(0)" class="btn updateQuestion">';
                                questionTypeAppend+='<i class="fa fa-archive" aria-hidden="true"></i>';
                                questionTypeAppend+='</a>';
                                questionTypeAppend+='<a href="javascript:void(0)" class="btn editQuestion">';
                                questionTypeAppend+='<i class="fas fa-edit"></i>';
                                questionTypeAppend+='</a>';
                                questionTypeAppend+='<a href="javascript:void(0)" class="btn removeQuestion">';
                                questionTypeAppend+='<i class="fa fa-trash"></i>';
                                questionTypeAppend+='</a>';
                                questionTypeAppend+='<label for="required_toggle">Required </label>';
                                questionTypeAppend+='<input type="checkbox" value="1" checked>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                
                                questionTypeAppend+='<div class="row  mb-5">';
                                questionTypeAppend+='<div class="col-md-12">';
                                questionTypeAppend+='<div class="question_type_options col-md-11"><input readonly type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Answer Text" value="" />';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                questionTypeAppend+='</div>';
                                
                                console.log("questionTypeAppend::==", questionTypeAppend);
                                $('.questionDetailBox').append(questionTypeAppend);
                                
                            }

                        }
                    });
                }
            }); 
            // addDuplicateQuestion();
        });
    </script>
@endsection
