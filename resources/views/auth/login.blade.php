<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/css/all.min.css')}}">
</head>
<body>
    <div id="header" style="height:100px;max-width:1200px;margin:0 auto;overflow:hidden;">
      <div class="icbu-ali-logo util-left" style="margin:40px 20px 0 0;">
          <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
      </div>
      <div class="util-left" style="margin-top:45px;">
          <select id="language-switch" onchange="window.targetLanguage=this.value;" class="icbu-language-swicth" style="outline:none;min-width:100px;height:26px;background:transparent;border-radius:3px;">
              <option value="vi_VN" selected>tiếng Việt</option>
              <option value="en_US">English</option>
              <option value="zh_CN">简体中文</option>
              <option value="zh_TW">繁体中文</option>
              <option value="es_ES">Español</option>
              <option value="pt_PT">Português</option>
              <option value="de_DE">Deutsch</option>
              <option value="fr_FR">Français</option>
              <option value="it_IT">Italiano</option>
              <option value="ru_RU">Pусский</option>
              <option value="ko_KR">한국어</option>
              <option value="ja_JP">日本語</option>
              <option value="ar_SA">اللغة العربية</option>
              <option value="tr_TR">Türk</option>
              <option value="th_TH">ภาษาไทย</option>
              <option value="nl_NL">nederlands</option>
              <option value="hi_IN">हिन्दी</option>
              <option value="iw_HE">עברית</option>
              <option value="in_ID">Bahasa Indonesia</option>
          </select>
      </div>
    </div>

    <div id="content">
      <div id="screen-banner" style="position: absolute; width: 100%; height: 600px; top: 101px; left: 0px; background: url(&quot;https://s.alicdn.com/@img/imgextra/i3/O1CN01uxL7Ov1LB7stCPzed_!!6000000001260-2-tps-2200-600.png&quot;) center center no-repeat rgb(245, 245, 245);"></div>
      <div id="action-container" style="position:relative;max-width:1200px;min-height:600px;zoom:1;margin:0 auto;">
        <div id="action-banner" style="float:left;width: 60%;height:600px;">
          <a href="#"></a>
        </div>
        <div id="login-form-wrapper" class="login-form-wrapper" style="float:left;margin:40px 0 0;border:solid 1px #ddd;box-shadow:0 0 10px #ddd;background:#fff;">
          <div style="margin:auto;position:relative;z-index:1;padding:32px 20px;">
            <div id="login-wrap"  class=" login-static  nc-outer-box" >
              @if (Session::has('error'))
                  <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                  </div>
              @endif
              <form action="{{ route('signin') }}" id="login-form" name="login-form" method="POST" class="form clr style-type-auto lang-en_us auto-en_us ">
                @csrf
                <div id="login-content" class="form clr">
                  <dl>
                    <dt class="fm-label">
                      <div class="fm-label-wrap clr">
                        <label for="fm-login-id">Email:</label>
                      </div>
                    </dt>
                    <dd id="fm-login-id-wrap" class="fm-field">
                      <div class="fm-field-wrap ">
                        <div id="account-check-loading" class="loading-mask">
                          <div class="loading-icon"></div>
                          <div class="loading-mask-body"></div>
                      </div>
                      <input id="fm-login-id" class="fm-text" name="email" tabindex="1"
                              required
                              placeholder="Email"
                              value="" autocorrect="off" autocapitalize="off"
                      />
                      </div>
                    </dd>
                  </dl>
                  <dl>
                    <dt class="fm-label">
                      <div class="fm-label-wrap clr">
                        <span class="fm-label-extra">
                          <a id="forgot-password-link" href="#" target="_blank" data-spm-protocol="i">Quên mật khẩu?</a>
                        </span>
                        <label for="fm-login-password">Mật khẩu:</label>
                      </div>
                    </dt>
                    <dd id="fm-login-password-wrap" class="fm-field">
                      <div class="fm-field-wrap">
                        <input required id="fm-login-password" class="fm-text" type="password" name="password" tabindex="2"
                                placeholder="Mật khẩu"
                                autocorrect="off" autocapitalize="off"
                        />
                      </div>
                    </dd>
                  </dl>
                  <dl id="baxiaNc"></dl>
                  <dl class="fm-login-checkcode-nc">
                    <dd id="fm-login-extra" class="fm-field">
                      <div class="fm-field-wrap clr">
                        <input type="checkbox" id="fm-keep-login" name="_fm.m._0.k" class="fm-checkbox fm-keep-login" checked/>
                        <label id="lbl-keep-login" for="fm-keep-login">Nhớ mật khẩu</label>
                      </div>
                    </dd>
                  </dl>
                </div>
                <div id="login-submit">
                  <input type="hidden" name="event_submit_do_login" value="submit"/>
                  <input id="fm-login-submit" value="Đăng nhập" class="fm-button fm-submit" type="submit" tabindex="4" name="submit-btn"/>
                </div>
                <div id="login-other">
                  <div class="register">
                    <a href="{{route('register')}}" class="register" target=" _blank" data-spm-protocol="i">Tạo tài khoản</a>
                  </div>
                  <div class="login-type-change-link">
                    <a href="/newlogin/icbuLogin.htm?showMobileLogin=true">Số điện thoại di động đăng nhập</a>
                  </div>
                </div>
                <div class="login-login-links">
                  <span class="thirdpart-login-text">Đăng nhập với:</span>
                  <span id="thirdpart-login">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>