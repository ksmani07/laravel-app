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
                <form method="POST" action="{{ route('step1') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                          <label for="address1" class="col-md-4 col-form-label text-md-right">{{ __('Address 1') }}</label>

                          <div class="col-md-6">
                              <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1',$userInfo->address1) }}" required autocomplete="address1" autofocus>

                              @error('address1')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                        <div class="col-md-6">
                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact' , $userInfo->contact) }}" required autocomplete="contact" autofocus>

                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="profileimage" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

                      <div class="col-md-6">
                          
                        @if(isset($userInfo->profile_image))
                        <div>
                        <img alt="profile Image" src="/storage/upload/{{$userInfo->profile_image}}" width="100px"/>
                        </div>
                        @endif
                          

                          <input id="profileimage" type="file"  class="form-control @error('profileimage') is-invalid @enderror" name="profileimage" aria-describedby="fileHelp" >

                          @error('profileimage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>Please upload a valid image file. Size of image should not be more than 2MB.</strong>
                              </span>
                          @enderror
                      </div>
                   </div>

                    

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
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
