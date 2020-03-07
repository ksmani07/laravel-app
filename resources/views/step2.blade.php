@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('step2') }}" enctype="multipart/form-data">
                        @csrf


                    <div class="form-group row">
                      <label for="bankimage" class="col-md-4 col-form-label text-md-right">{{ __('Bank details') }}</label>

                      <div class="col-md-6">
                          <input id="bankimage" type="file" {{ (!empty($userinfo->bank_image)) ? "disabled" : ''}} class="form-control @error('bankimage') is-invalid @enderror" name="bankimage" aria-describedby="fileHelp" >

                          @error('bankimage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12  d-flex flex-row flex-start">
                            <a type="button" href="/step-1" class="btn btn-warning">Back to Step 1</a>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Continue') }}
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
