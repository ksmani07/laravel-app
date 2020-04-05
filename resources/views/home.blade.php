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
                          <label for="aadharno" class="col-md-4 col-form-label text-md-right">{{ __('ஆதார் கார்டு எண்') }}</label>

                          <div class="col-md-6">
                                                         {{ $userInfo->aadharno}}
                          </div>
                      </div>

                    <!--  <div class="card-header1">Dashboard</div>-->
                      <div class="form-group row">
                          <label for="fulladdress" class="col-md-4 col-form-label text-md-right">{{ __('வீட்டு முகவரி') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->fulladdress}}    
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="State" class="col-md-4 col-form-label text-md-right">{{ __('State ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->State}}
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="District" class="col-md-4 col-form-label text-md-right">{{ __('சொந்த மாவட்டம் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->District}}
                          </div>
                      </div>


                          <div class="form-group row">
                                  <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('மாணவர் (அ) பெற்றோரின் கைபேசி எண்') }}</label>
                                 
                                 <div class="col-md-6">
                                 <br>
                                 {{ $userInfo->contact}}
                                 </div>
                            </div>

                     
                      <div class="form-group row">
                          <label for="Graduation" class="col-md-4 col-form-label text-md-right">{{ __('பட்டப் படிப்பு (பொறியியல்) / கலை மற்றும்
அறிவியல்  மற்றும் மருத்துவம் சார்ந்த கல்வி (Any Graduation Course)
 ') }}</label>

                          <div class="Graduation">
                             
                          {{ $userInfo->Graduation}}
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('பிறந்த தேதி ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->dateofbirth}}
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('வயது ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->age}}

                        </div>
                      </div>


                      <div class="form-group row">
                          <label for="institution" class="col-md-4 col-form-label text-md-right">{{ __('கல்வி பயிலும் நிறுவனத்தின் பெயர் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->institution}} 
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="mark" class="col-md-4 col-form-label text-md-right">{{ __('மார்ச், 2020 ஆம் ஆண்டு +2  தேர்வில் 
பெற்ற மதிப்பெண் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->mark}}
                        </div>
                      </div>


                      <div class="card-header1">பெற்றோரின் விபரம்</div>
                        <br>

                     <div class="form-group row">
                          <label for="F_name" class="col-md-4 col-form-label text-md-right">{{ __('தந்தை பெயர் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->F_name}}
                        </div>
                      </div>

                    
                      <div class="form-group row">
                          <label for="M_name" class="col-md-4 col-form-label text-md-right">{{ __('தாய்  பெயர் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->M_name}} 
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="F_occupation" class="col-md-4 col-form-label text-md-right">{{ __('தந்தை தொழில் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->F_occupation}}      
                        </div>
                      </div>


                      <div class="form-group row">
                          <label for="M_occupation" class="col-md-4 col-form-label text-md-right">{{ __('தாய்  தொழில் ') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->M_occupation}}
                        </div>
                      </div>




                      <div class="card-header1">மாணவரின் வங்கி சேமிப்பு கணக்கு விபரம்  </div>
                        <br>
                        <div class="form-group row">
                          <label for="bankaccountno" class="col-md-4 col-form-label text-md-right">{{ __('வங்கியின் சேமிப்பு கணக்கு எண்') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->bankaccountno}}    
                           </div>
                      </div>

                      <div class="form-group row">
                          <label for="bankname" class="col-md-4 col-form-label text-md-right">{{ __('வங்கியின் பெயர்') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->bankname}}    
                          
                           </div>
                      </div>

                      
                      <div class="form-group row">
                          <label for="bankarea" class="col-md-4 col-form-label text-md-right">{{ __('வங்கி கிளை ஊர்') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->bankarea}} 
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="Micrcodeno" class="col-md-4 col-form-label text-md-right">{{ __('MICR. CODE No.') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->Micrcodeno}}
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="Ifsccodeno" class="col-md-4 col-form-label text-md-right">{{ __('IFSC. CODE No.') }}</label>

                          <div class="col-md-6">
                          {{ $userInfo->Ifsccodeno}}
                             
                          </div>
                      </div>
                      

                      <div class="form-group row">
                    
                      @if(isset($userInfo->profile_image))
                      Student Photo:
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->profile_image}}" width="100px"/>
                      </div>
                      @endif
                      </div>


                      <div class="form-group row">
                      @if(isset($userInfo->imgcommunity))
                      சாதி (வட்டாட்சியர் அலுவலகத் திலிருந்து பெறப்பட்ட சான்று இணைக்கப்பட வேண்டும்)
இந்து - வன்னிய  குல க்ஷத்ரியர்  :
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->imgcommunity}}" width="100px"/>
                      </div>
                      @endif
                      </div>
                      
                      
                      <div class="form-group row">
                      @if(isset($userInfo->imgplus2mark))
                      +2 மதிப்பெண் சான்று :
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->imgplus2mark}}" width="100px"/>
                      </div>
                      @endif
                      </div>


                      <div class="form-group row">
                      @if(isset($userInfo->imgcollegebonafide))
                      கல்வி
பயிலும் அலுவலகத்திலிருந்து பெறப்பட்ட
சான்று  இணைக்கப்பட வேண்டும் :
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->imgcollegebonafide}}" width="100px"/>
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
  

                   
                   <div class="form-group row">
                      @if(isset($userInfo->studentsign))
                      மாணவரின் ஒப்பம் :
                      <div>
                      <img alt="profile Image" src="/storage/upload/{{$userInfo->studentsign}}" width="100px"/>
                      </div>
                      @endif
                      </div> 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
