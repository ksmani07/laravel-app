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
                          <label for="aadharno" class="col-md-4 col-form-label text-md-right">{{ __('ஆதார் கார்டு எண்') }}</label>

                          <div class="col-md-6">
                              <input id="aadharno" type="text" class="form-control @error('aadharno') is-invalid @enderror" name="aadharno" value="{{ old('aadharno',$userInfo->aadharno) }}" required autocomplete="aadharno" autofocus>

                              @error('address1')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                    <!--  <div class="card-header1">Dashboard</div>-->
                      <div class="form-group row">
                          <label for="fulladdress" class="col-md-4 col-form-label text-md-right">{{ __('வீட்டு முகவரி') }}</label>

                          <div class="col-md-6">
                              <textarea id="fulladdress"  rows="5" cols="43.9"  class="form-control @error('fulladdress') is-invalid @enderror" name="fulladdress" value="{{ old('fulladdress',$userInfo->fulladdress) }}" required autocomplete="fulladdress" autofocus></textarea>

                              @error('fulladdress')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="State" class="col-md-4 col-form-label text-md-right">{{ __('State ') }}</label>

                          <div class="col-md-6">
                              <input id="State" type="text" class="form-control @error('State') is-invalid @enderror" name="State" value="{{ old('State',$userInfo->State) }}" required autocomplete="State" autofocus>

                              @error('State')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="District" class="col-md-4 col-form-label text-md-right">{{ __('சொந்த மாவட்டம் ') }}</label>

                          <div class="col-md-6">
                              <input id="District" type="text" class="form-control @error('District') is-invalid @enderror" name="District" value="{{ old('District',$userInfo->District) }}" required autocomplete="District" autofocus>

                              @error('District')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>




                          <div class="form-group row">
                                  <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('மாணவர் (அ) பெற்றோரின் கைபேசி எண்') }}</label>
                                 
                                 <div class="col-md-6">
                                 <br>
                                     <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact' , $userInfo->contact) }}" required autocomplete="contact" autofocus>

                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                            </div>

                     
                      <div class="form-group row">
                          <label for="Graduation" class="col-md-4 col-form-label text-md-right">{{ __('பட்டப் படிப்பு (பொறியியல்) / கலை மற்றும்
அறிவியல்  மற்றும் மருத்துவம் சார்ந்த கல்வி (Any Graduation Course)
 ') }}</label>

                          <div class="col-md-6">
                             
                             <br>
                             <br>
                              <input id="Graduation" type="text" class="form-control @error('Graduation') is-invalid @enderror" name="Graduation" value="{{ old('Graduation',$userInfo->Graduation) }}" required autocomplete="Graduation" autofocus>

                              @error('Graduation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('பிறந்த தேதி ') }}</label>

                          <div class="col-md-6">
                              <input id="dateofbirth" type="text" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth',$userInfo->dateofbirth) }}" required autocomplete="dateofbirth" autofocus>
                              
                              @error('dateofbirth')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('வயது ') }}</label>

                          <div class="col-md-6">
                              <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age',$userInfo->age) }}" required autocomplete="age" autofocus>
                              
                              @error('age')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="institution" class="col-md-4 col-form-label text-md-right">{{ __('கல்வி பயிலும் நிறுவனத்தின் பெயர் ') }}</label>

                          <div class="col-md-6">
                              <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution',$userInfo->institution) }}" required autocomplete="institution" autofocus>
                              
                              @error('institution')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="mark" class="col-md-4 col-form-label text-md-right">{{ __('மார்ச், 2020 ஆம் ஆண்டு +2  தேர்வில் 
பெற்ற மதிப்பெண் ') }}</label>

                          <div class="col-md-6">
                              <input id="mark" type="text" class="form-control @error('mark') is-invalid @enderror" name="mark" value="{{ old('mark',$userInfo->mark) }}" required autocomplete="mark" autofocus>
                              
                              @error('mark')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="card-header1">பெற்றோரின் விபரம்</div>
                        <br>

                     <div class="form-group row">
                          <label for="F_name" class="col-md-4 col-form-label text-md-right">{{ __('தந்தை பெயர் ') }}</label>

                          <div class="col-md-6">
                              <input id="F_name" type="text" class="form-control @error('F_name') is-invalid @enderror" name="F_name" value="{{ old('F_name',$userInfo->F_name) }}" required autocomplete="F_name" autofocus>

                              @error('F_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                    
                      <div class="form-group row">
                          <label for="M_name" class="col-md-4 col-form-label text-md-right">{{ __('தாய்  பெயர் ') }}</label>

                          <div class="col-md-6">
                              <input id="M_name" type="text" class="form-control @error('M_name') is-invalid @enderror" name="M_name" value="{{ old('M_name',$userInfo->M_name) }}" required autocomplete="M_name" autofocus>

                              @error('M_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="F_occupation" class="col-md-4 col-form-label text-md-right">{{ __('தந்தை தொழில் ') }}</label>

                          <div class="col-md-6">
                              <input id="F_occupation" type="text" class="form-control @error('F_occupation') is-invalid @enderror" name="F_occupation" value="{{ old('F_occupation',$userInfo->F_occupation) }}" required autocomplete="F_occupation" autofocus>

                              @error('F_occupation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="M_occupation" class="col-md-4 col-form-label text-md-right">{{ __('தாய்  தொழில் ') }}</label>

                          <div class="col-md-6">
                              <input id="M_occupation" type="text" class="form-control @error('M_occupation') is-invalid @enderror" name="M_occupation" value="{{ old('M_occupation',$userInfo->M_occupation) }}" required autocomplete="M_occupation" autofocus>

                              @error('M_occupation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>




                      <div class="card-header1">மாணவரின் வங்கி சேமிப்பு கணக்கு விபரம்  </div>
                        <br>
                        <div class="form-group row">
                          <label for="bankaccountno" class="col-md-4 col-form-label text-md-right">{{ __('வங்கியின் சேமிப்பு கணக்கு எண்') }}</label>

                          <div class="col-md-6">
                              <input id="bankaccountno" type="text" class="form-control @error('bankaccountno') is-invalid @enderror" name="bankaccountno" value="{{ old('bankaccountno',$userInfo->bankaccountno) }}" required autocomplete="bankaccountno" autofocus>
                              
                              @error('bankaccountno')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="bankname" class="col-md-4 col-form-label text-md-right">{{ __('வங்கியின் பெயர்') }}</label>

                          <div class="col-md-6">
                              <input id="bankname" type="text" class="form-control @error('bankname') is-invalid @enderror" name="bankname" value="{{ old('bankname',$userInfo->bankname) }}" required autocomplete="bankname" autofocus>
                              
                              @error('bankname')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      
                      <div class="form-group row">
                          <label for="bankarea" class="col-md-4 col-form-label text-md-right">{{ __('வங்கி கிளை ஊர்') }}</label>

                          <div class="col-md-6">
                              <input id="bankarea" type="text" class="form-control @error('bankarea') is-invalid @enderror" name="bankarea" value="{{ old('bankarea',$userInfo->bankarea) }}" required autocomplete="bankarea" autofocus>
                              
                              @error('bankarea')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="Micrcodeno" class="col-md-4 col-form-label text-md-right">{{ __('MICR. CODE No.') }}</label>

                          <div class="col-md-6">
                              <input id="Micrcodeno" type="text" class="form-control @error('Micrcodeno') is-invalid @enderror" name="Micrcodeno" value="{{ old('Micrcodeno',$userInfo->Micrcodeno) }}" required autocomplete="Micrcodeno" autofocus>
                              
                              @error('Micrcodeno')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="Ifsccodeno" class="col-md-4 col-form-label text-md-right">{{ __('IFSC. CODE No.') }}</label>

                          <div class="col-md-6">
                              <input id="Ifsccodeno" type="text" class="form-control @error('Ifsccodeno') is-invalid @enderror" name="Ifsccodeno" value="{{ old('Ifsccodeno',$userInfo->Ifsccodeno) }}" required autocomplete="Ifsccodeno" autofocus>
                              
                              @error('Ifsccodeno')
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
