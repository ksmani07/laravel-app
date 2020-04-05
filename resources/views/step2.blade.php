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
                      <label for="imgcommunity" class="col-md-4 col-form-label text-md-right">{{ __('சாதி (வட்டாட்சியர் அலுவலகத் திலிருந்து பெறப்பட்ட சான்று இணைக்கப்பட வேண்டும்)
இந்து - வன்னிய  குல க்ஷத்ரியர்  ') }}</label>

                      <div class="col-md-6">
                          <input id="imgcommunity" type="file" {{ (!empty($userinfo->imgcommunity)) ? "disabled" : ''}} class="form-control @error('imgcommunity') is-invalid @enderror" name="imgcommunity" aria-describedby="fileHelp" >

                          @error('imgcommunity')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>
                   

                   <div class="form-group row">
                      <label for="imgplus2mark" class="col-md-4 col-form-label text-md-right">{{ __('+2 மதிப்பெண் சான்று ') }}</label>

                      <div class="col-md-6">
                          <input id="imgplus2mark" type="file" {{ (!empty($userinfo->imgplus2mark)) ? "disabled" : ''}} class="form-control @error('imgplus2mark') is-invalid @enderror" name="imgplus2mark" aria-describedby="fileHelp" >

                          @error('imgplus2mark')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>


                   <div class="form-group row">
                      <label for="imgcollegebonafide" class="col-md-4 col-form-label text-md-right">{{ __('கல்வி
பயிலும் அலுவலகத்திலிருந்து பெறப்பட்ட
சான்று  இணைக்கப்பட வேண்டும் ') }}</label>

                      <div class="col-md-6">
                          <input id="imgcollegebonafide" type="file" {{ (!empty($userinfo->imgcollegebonafide)) ? "disabled" : ''}} class="form-control @error('imgcollegebonafide') is-invalid @enderror" name="imgcollegebonafide" aria-describedby="fileHelp" >

                          @error('imgcollegebonafide')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>



                    <div class="form-group row">
                      <label for="bankimage" class="col-md-4 col-form-label text-md-right">{{ __('வங்கி சேமிப்பு கணக்கு புத்தகத்தின் முதல் பக்க நகல்') }}</label>

                      <div class="col-md-6">
                          <input id="bankimage" type="file" {{ (!empty($userinfo->bank_image)) ? "disabled" : ''}} class="form-control @error('bankimage') is-invalid @enderror" name="bankimage" aria-describedby="fileHelp" >

                          @error('bankimage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>

                   <div class="form-group row">
                      <label for="studentsign" class="col-md-4 col-form-label text-md-right">{{ __('மாணவரின் ஒப்பம்') }}</label>

                      <div class="col-md-6">
                          <input id="studentsign" type="file" {{ (!empty($userinfo->studentsign)) ? "disabled" : ''}} class="form-control @error('studentsign') is-invalid @enderror" name="studentsign" aria-describedby="fileHelp" >

                          @error('studentsign')
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
