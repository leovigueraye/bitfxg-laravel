<div class="row">
    <div class="col-12">
        <form method="post" action="javascript:void(0)" id="updatepreference">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Contact Email</h5>
                    <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="contact_email" value="{{$settings->contact_email}}" required>
                </div>
                
                <input name="s_currency" value="{{ $settings->s_currency }}" id="s_c" type="hidden">
                <div class="form-group col-md-6">
                    <h5 class="text-{{$text}}">Website Currency</h5>
                    <select name="currency" id="select_c" class="form-control bg-{{$bg}} text-{{$text}} select2" onchange="changecurr()" style="width: 100%">
                        <option value="<?php echo htmlentities($settings->currency); ?>">{{ $settings->currency }}</option>
                        @foreach($currencies as $key=>$currency)
                        <option id="{{$key}}" value="<?php echo html_entity_decode($currency); ?>">{{$key .' ('.html_entity_decode($currency).')'}}</option>
                        @endforeach
                    </select>
                    
                </div> 
                <input type="hidden" value="{{$settings->site_preference}}" name="site_preference">
            </div>
            
            <div class="mt-3 row">
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Annoucment:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="annouc" value="on" class="selectgroup-input" {{$settings->enable_annoc=='on' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="annouc" value="off" class="selectgroup-input" {{$settings->enable_annoc !='on' ? 'checked' : ''}}>
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Weekend Trade:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="weekend_trade" value="on" class="selectgroup-input" {{$settings->weekend_trade =='on' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="weekend_trade" {{$settings->weekend_trade !='on' ? 'checked' : ''}} value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                       <small class="text-{{$text}}">if turned off, Users will not receive ROI on weekends</small> 
                    </div>
                </div>
                
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Withdrawals</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="withdraw" id="withdraw" value="true" class="selectgroup-input" {{ $settings->enable_with =='true' ? 'checked' : ''}}>
                            <span class="selectgroup-button">Enable</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="withdraw" {{ $settings->enable_with !='true' ? 'checked' : ''}}value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Disable</span>
                        </label>
                    </div>
                    <div>
                        <small class="text-{{$text}}">if disabled, Users will not be able to place withdrawal request</small>
                    </div>
                    
                </div>
            
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Google ReCaptcha:</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="captcha" value="true" class="selectgroup-input" {{ $settings->captcha =='true' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="captcha" {{ $settings->captcha !='true' ? 'checked' : ''}} value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                       <small class="text-{{$text}}">if turned on, Users will need to pass the google recaptcha challenge upon registration, also please see how to set up google recpatcha on your website before you can use it. <a href="https://doc.onlinetrade.brynamics.xyz/details/how-to-add-google-recaptcha-" target="_blank">See how</a></small> 
                    </div>
                    
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Translation</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="googlet" id="googlet" value="on" class="selectgroup-input" {{ $settings->google_translate =='on' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="googlet" {{ $settings->google_translate !='on' ? 'checked' : ''}} value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned on, Users will have the option of selecting their preferred language through google translation</small>  
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Trade Mode</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="trade_mode" value="on" class="selectgroup-input" {{ $settings->trade_mode =='on' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="trade_mode" {{ $settings->trade_mode !='on' ? 'checked' : ''}} value="off" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned off, Users will not receive thier ROI at all.</small>  
                    </div>
                </div>
                
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">KYC(Verification)</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="enable_kyc" value="yes" class="selectgroup-input" {{ $settings->enable_kyc =='yes' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="enable_kyc" {{ $settings->enable_kyc !='yes' ? 'checked' : ''}} value="no" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">if turned on, Users will need to submit required documents to get verified before they can place a withdrawal request.</small> 
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Google Login</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="social" id="social" value="yes" class="selectgroup-input" {{ $settings->enable_social_login =='yes' ? 'checked' : ''}}>
                            <span class="selectgroup-button">On</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="social" {{ $settings->enable_social_login !='yes' ? 'checked' : ''}} value="no" class="selectgroup-input">
                            <span class="selectgroup-button">Off</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">Google Login allows users to login/register with their google account</small> 
                    </div>
                </div>

                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Email Verification</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="enail_verify" value="true" class="selectgroup-input" {{ $settings->enable_verification =='true' ? 'checked' : ''}}>
                            <span class="selectgroup-button">Enable</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="enail_verify" {{ $settings->enable_verification !='true' ? 'checked' : ''}} value="false" class="selectgroup-input">
                            <span class="selectgroup-button">Disable</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">If email verification is disabled users will not be ask to verify their email address.</small> 
                    </div>
                </div>
                <div class="mt-4 col-md-6">
                    <h5 class="text-{{$text}}">Return Capital</h5>
                    <div class="selectgroup">
                        <label class="selectgroup-item">
                            <input type="radio" name="return_capital" value="true" class="selectgroup-input" {{ $settings->return_capital ? 'checked' : ''}}>
                            <span class="selectgroup-button">Yes</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="return_capital" {{ !$settings->return_capital ? 'checked' : ''}} value="false" class="selectgroup-input">
                            <span class="selectgroup-button">No</span>
                        </label>
                    </div>
                    <div>
                      <small class="text-{{$text}}">If return capital is No, the system will not credit the user with his capital after investment plan expires</small> 
                    </div>
                </div>
                <input type="hidden" name="id" value="1">
            </div>
            <div class="mt-4">
                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
            </div>
        </form>
    </div>
</div>
    