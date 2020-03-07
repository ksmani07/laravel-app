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


                    <div class="form-group row">
                      <label for="bankimage" class="col-md-4 col-form-label text-md-right">{{ __('address1') }}</label>
                      <div class="col-md-6">
                          {{ $userInfo->address1}}
                      </div>
                   </div>

                   <div class="form-group row">
                      <label for="bankimage" class="col-md-4 col-form-label text-md-right">{{ __('contact') }}</label>
                      <div class="col-md-6">
                          {{ $userInfo->contact}}
                      </div>
                   </div>

                   <div class="form-group row">
                      @if(isset($userInfo->profile_image))
                      profile Image:
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->profile_image}}" width="100px"/>
                      </div>
                      @endif
                   </div>

                   <div class="form-group row">
                      @if(isset($userInfo->bank_image))
                      bank Image:
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->bank_image}}" width="100px"/>
                      </div>
                      @endif
                   </div>

                   

                    <div class="form-group row mb-0">
                        <div class="col-md-12  d-flex flex-row flex-start">
                            <a type="button" href="/step-1" class="btn btn-primary">Back to Step 1</a>
                            <a type="button" href="/step-2" class="btn btn-primary">Back to Step 2</a>
                            <a type="button" href="/createstep3" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
