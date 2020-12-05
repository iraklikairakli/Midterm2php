@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 mt-5">

            <form method="post" enctype="multipart/form-data" action="{{ route('store') }}">
                @csrf
                <h3>Create Quiz</h3>

                <div class="row">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ implode('', $errors->all(':message')) }}
                        </div>
                    @endif

                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Question</label>
                        <input type="text" class="form-control" id="name" name="title" placeholder="Enter Question" required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Answear 1</label>
                        <input type="text" class="form-control" name="answears[]" required
                            placeholder="Enter Answear 1">
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Answear 2</label>
                        <input type="text" class="form-control" name="answears[]" 
                            placeholder="Enter Answear 2">
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Answear 3</label>
                        <input type="text" class="form-control" id="answear_three" name="answears[]" required
                            placeholder="Enter Answear 3">
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Answear 4</label>
                        <input type="text" class="form-control" name="answears[]" required
                            placeholder="Enter Answear 4">
                    </div>

                    <div class="form-group col-sm-12">
                        Correct Answears
                        <div class="form-group col-sm-12">
                            <input type="radio" class="form-check-input" name="iscorrect" id="optionsRadios4" required
                                   value="0">
                            Answear 1
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="radio" class="form-check-input" name="iscorrect" id="optionsRadios4" required
                                   value="1">
                            Answear 2
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="radio" class="form-check-input" name="iscorrect" id="optionsRadios4" required
                                   value="2">
                            Answear 3
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="radio" class="form-check-input" name="iscorrect" id="optionsRadios4" required
                                   value="3">
                            Answear 4
                        </div>
                    </div>

                    <div class="form-group  col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>

@endsection
