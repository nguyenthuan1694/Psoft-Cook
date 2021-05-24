@extends('auth.header')
<link rel="stylesheet" href="/assets/css/page/login.css" type="text/css">

<section class="login-page-style">
    <div class="img-box">
       
    </div>
     <div class="ab-register-box"> 
        <div class="login-box">
                <div class="sub-login-box">
                    <div class="login-logo mt-2 text-center">
                        <img width="150px" src="/assets/img/logos/logo P-SOFT.svg" class="img-fluid" alt="Responsive image" loading="lazy" >
                    </div>
                    <div class="login-header text-center">
                        <span class="login100-form-title-1 text-uppercase">
                            Đăng ký tài khoản
                        </span>
                    </div>
                    
                    <form method="POST" class="p-t-15" action="{{ route('register') }}">
                    @csrf

                    @isset($ref_name)
                    <div class="text08 color-gray text-left"><i>Người giới thiệu</i>: 
                        <span class="text-capitalize">{{ $ref_name }}</span></div>
                    <input type="hidden" name="referral" value="{{$referral}}"/>
                    @endisset

                    <div class="valid-error-css">  
                        <!-- @if ($errors->has('name'))
                        <img src="/assets/img/logos/error_icon.png" class="img-fluid" alt="Responsive image">     
                        <span>
                            {{ $errors->first('name') }}
                        </span>
                     
                        @endif -->
                    </div>   
                    <div>
                        <input id="name" type="text" class=" input-login-class @error('name') is-invalid @enderror" 
                        name="name" value="{{ old('name') }}" placeholder="Vui lòng nhập tên" 
                        title="" autofocus>    
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror            
                    </div>
                    
                    <div class="valid-error-css">  
                        <!-- @if ($errors->has('email'))
                        <img src="/assets/img/logos/error_icon.png" class="img-fluid" alt="Responsive image">     
                        <span>
                            {{ $errors->first('email') }}
                        </span>
                     
                        @endif -->
                    </div>   
                    
                    <div>
                        <input class="input-login-class @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" 
                        placeholder="Vui lòng nhập email" autofocus maxlength="50">     
                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror             
                    </div>
                  
                    <div class="valid-error-css"></div>
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="input-login-class @error('password') is-invalid @enderror" 
                        placeholder="Vui lòng nhập mật khẩu" name="password" value="{{ old('password') }}"  >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="input-group-addon show-password">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                       
                    </div>

                    <div class="valid-error-css"></div>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="input-login-class" 
                        placeholder="Vui lòng xác nhận lại mật khẩu" name="password_confirmation" required autocomplete="new-password" >
                    </div>

                  
                    <!-- <div class="remember-box remember-box-register">                              
                            <label class="check-label-container" for="poclicy_accept">
                              <input type="checkbox" name="poclicy_accept" id="poclicy_accept" {{ old('poclicy_accept') ? 'checked' : '' }}>
                              <span class="checkmark checkmark-register {{ $errors->has('poclicy_accept') ? ' is-check-invalid' : '' }} "></span>
                              Tôi đồng ý với <a href="/policy"  target="_blank" class="color-blue">&nbsp;điều khoản và điều kiện&nbsp;</a> của TALENT TECH 6.0
                            </label>   
                    </div> -->
                    <div class="pt-5">
                        <button type="submit" class="sign-in-btn">
                            Đăng ký
                        </button>
                    </div> 

                </form>
            </div>
        </div>
           
           
            
    </div>
</section>
@endsection

<script type="text/javascript">
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
</script>