@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                  <form action="/questionnaires" method="POST">
                       @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                        <small id="titleHelp" class="form-text text-muted">Give you Questionnaire a title that attract's Attention</small>
                    </div>
                    @error('title')
                <small class="text-danger">{{$message}}</small>
                    @enderror

                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input name= 'purpose' type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                        <small id="purposeHelp" class="form-text text-muted">Giving a purpose will increase responses</small>
                    </div>
                    @error('purpose')
                <small class="text-danger">{{$message}}</small>
                    @enderror <br>

                    <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
