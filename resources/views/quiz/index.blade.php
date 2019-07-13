@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Mathematics Quiz') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('result') }}">
                            <input type="hidden" name="question_id" id="question_id" value="">
                            <input type="hidden" name="next_question_id" id="next_question_id" value="">
                            <input type="hidden" name="redirect" id="redirect" value="0">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <p class="lead question">
                                    </p>
                                    <hr />
                                    <div class="alert alert-danger error" style="display: none">
                                        <strong>Error!</strong> Please select an option.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="option1" name="answer" value="" required >
                                        <label class="form-check-label disabled  lblOption1" for="answer1">Option 1</label>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="option2" name="answer" value="" required>
                                        <label class="form-check-label disabled lblOption2" for="answer2">Option 2</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="option3" name="answer" value="" required>
                                        <label class="form-check-label disabled lblOption3" for="answer3">Option 3</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" id="btnprev">
                                        {{ __('Previous') }}
                                    </button>&nbsp;&nbsp;
                                    <button type="button" class="btn btn-primary" id="btnnext">
                                        {{ __('Next') }}
                                    </button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.error').hide();
            let init = function(){
                    $.ajax({
                        type:'GET',
                        url:'/nextQuestion',
                        data : {'next_question_id': 0},
                        success:function(data){
                            let result = $.parseJSON(data);
                           generateView(result);
                        }
                    });
                };
                let generateView = function(data) {

                    $('#next_question_id').val(data.nextQuestionId);
                    if(data.redirect){
                        $('#redirect').val(data.redirect);
                    }
                    $('.question').html(data.question);
                    $('#question_id').val(data.question_id);
                    $('#option1').val(data[0].option_id)
                    $('.lblOption1').text(data[0].option);
                    $('#option2').val(data[1].option_id)
                    $('.lblOption2').text(data[1].option);
                    $('#option3').val(data[2].option_id)
                    $('.lblOption3').text(data[2].option);

                    if(data.btnfinish){
                        $('#btnnext').html('Finish');
                    }

                }

                init();

                $("#btnnext").on('click', function() {
                    let question_id = $('#question_id').val();
                    let answer = $("input[name='answer']:checked").val();
                    let next_question_id =   $('#next_question_id').val();
                    let redirect = $('#redirect').val();
                    if(redirect ==1){
                        $(location).attr('href', '/result')
                    }
                    if(!answer){
                        $('.error').show();
                    }else {
                        $('.error').hide();
                        $.ajax({
                            type:'POST',
                            url:'/save',
                            data : { answer : answer, question_id : question_id},
                            success:function(data){
                                let result = $.parseJSON(data);
                                if(result.success){
                                    $.ajax({
                                        type:'GET',
                                        url:'/nextQuestion',
                                        data : {'next_question_id':next_question_id},
                                        success:function(data){
                                            let result = $.parseJSON(data);
                                            generateView(result);
                                            $("input[name='answer']:checked").prop('checked', false);
                                        }
                                    });
                                }
                            }
                        });
                    }
                });
        });
    </script>
@endsection
