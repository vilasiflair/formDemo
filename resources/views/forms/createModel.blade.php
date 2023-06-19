    <!--begin::Modal - Create App-->
        <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-2000px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create Form</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
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
                                        <div class="questionAppend">

                                        </div>
                                        <div class="questionTypeAppend">
                                            
                                        </div>
                                    </div>
                                    <div class="question_Details"> 
                                        <div class="fv-row mb-10 ">
                                            <!--begin::Input-->
                                            <div class="question">
                                                <input type="text" class="form-control form-control-lg form-control-solid questionValue" name="question" placeholder="Question" value="" />
                                            </div>

                                            <div class="required_toggle">
                                                <label for="required_toggle">Required</label>
                                                <input type="checkbox" value="1" checked>
                                            </div>
                                            <div class="question_type_dropdown">
                                                <select class="form-control question_type questionTypeValue">
                                                    <option value="1">Short Answer</option>
                                                    <option value="2">Paragraph</option>
                                                    <option value="3">Multiple Choice</option>
                                                    <option value="4">Checkboxes</option>
                                                    <option value="5" selected>Drop-Down</option>
                                                    <option value="6">File Upload</option>
                                                    <option value="7">Linear Scale</option>
                                                    <option value="8">Multiple-Choice Grid</option>
                                                    <option value="9">Tick-Box Grid</option>
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
											<button type="button" class="btn btn-lg btn-primary getDuplicateQuestion" data-kt-stepper-action="submit">
												<span class="indicator-label">Duplicate</span>
											</button>
                                            <button type="button" class="btn btn-lg btn-primary removeQuestion" data-kt-stepper-action="submit">
												<span class="indicator-label">Remove</span>
											</button>
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
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            
            $(document).ready(function(){
                $(".addQuestionRow").click(function(){
                   
                    var questionValue = $('.questionValue').val();
                    var questionTypeValue = $('.questionTypeValue').val();

                    $('.questionAppend').append(questionValue);
                    $('.questionTypeAppend').append(questionTypeValue);
                    $('.questionValue').val('');

                });

                $(".questionTypeValue").change(function(){
                    var questionTypeValue = $('.questionTypeValue').val();
                    $appendInput = '';
                    if(questionTypeValue == 1)
                    {
                       $appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid" name="shortQuestion" placeholder="Short Question Text" value="" /></div>';
                    }
                    if(questionTypeValue == 2)
                    {
                       $appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid" name="paragraph" placeholder="Paragraph Text" value="" /></div>';
                    }
                    if(questionTypeValue == 3)
                    {
                       $appendInput+='<span>-</span>';
                       $appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid" name="multipleChoice" value="Option 1" /></div>';
                       $appendInput+='<div class="multipleOptionAppend"></div>';
                       $appendInput+='<span>-</span>';
                       $appendInput+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid LastMultipleOption" name="multipleChoice" placeholder="Add Option" value="" /><span>Or </span><a href="">Add "Other"</a></div>';
                    }

                    $('.appendInput').append($appendInput);

                    $(".LastMultipleOption").click(function(){
                        $multipleOptionAppend = '';
                        $countOption = '1';
                        $multipleOptionAppend+='<span>-</span>';
                        $multipleOptionAppend+='<div class="question_type_options"><input type="text" class="form-control form-control-lg form-control-solid" name="multipleChoice" value="Option "+ $countOption++ /></div>';

                        $('.multipleOptionAppend').append($multipleOptionAppend);

                    });

                });
            });
        </script>
        

