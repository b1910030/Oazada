<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đăng ký</title>
  <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/register.css')}}">
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

    <div id="container" style="min-height: 500px;" onclick="unbounce()">
      <div class="schema-form union_reg">
        <form action="{{ route('register') }}" method="POST" class="next-form next-form-left ver next-form-large">
          @csrf
          <div class="form-content">
            <div class="next-form-item next-row biz-form-component-CountrySelect-field-item union_reg" label="Country/Region:">
              <label for="country" required="" class="next-col-8 next-form-item-label">
                Quốc gia/Khu vực:
              </label>
              <div class="next-col-10 next-form-item-control">
                <div class="countrySelect">
                  <select name="country" id="country">
                    <option value="VietNam">Việt Nam</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Canada">Canada</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Thailand">Thailand</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="next-form-item next-row biz-form-component-RadioGroup-field-item union_reg next-form-text-align" label="Please select trade role:">
              <label for="tradeRole" required class="next-col-8 next-form-item-label">
                Vui lòng chọn vai trò của bạn:
              </label>
              <div class="next-col-10 next-form-item-control">
                <div id="tradeRole" class="next-radio-group">
                  <label>
                    <span class="next-radio ">
                      <span class="next-radio-inner unpress"></span>
                      <input name="role" type="radio" value="buyer" aria-checked="false">
                    </span>
                    <span class="next-radio-label">Người mua</span>
                  </label>
                  <label>
                    <span class="next-radio ">
                      <span class="next-radio-inner unpress"></span>
                      <input name="role" type="radio" value="seller" aria-checked="false">
                    </span>
                    <span class="next-radio-label">Người bán</span>
                  </label>
                  <label>
                    <span class="next-radio ">
                      <span class="next-radio-inner unpress"></span>
                      <input name="role" type="radio" value="both" aria-checked="false">
                    </span>
                    <span class="next-radio-label">Cả hai</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="next-form-item next-row biz-form-component-Input-field-item union_reg" label="Email Address:">
              <label for="email" required="" class="next-col-8 next-form-item-label">
                Địa chỉ Email:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input name="email" required type="email" placeholder="Nhập địa chỉ email." value="" data-meta="Field" id="email" height="100%">
                </span><!-- react-text: 46 --> <!-- /react-text -->
                <div class=""></div><!-- react-text: 48 --> <!-- /react-text -->
              </div>
            </div>
            <div class="next-form-item next-row biz-form-component-PasswordInput-field-item union_reg" label="Login Password:">
              <label for="password" required="" class="next-col-8 next-form-item-label">
                Mật khẩu:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input name="password" required type="password" autocomplete="new-password" value="" placeholder="Nhập mật khẩu" data-meta="Field" id="password" height="100%">
                </span>
                <div class=""></div><!-- react-text: 57 --> <!-- /react-text -->
              </div>
            </div>
            {{-- <div class="next-form-item next-row biz-form-component-Input-field-item union_reg" label="Confirm Password:">
              <label for="rePassword" required="" class="next-col-8 next-form-item-label">
                Confirm Password:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input type="password" placeholder="Enter the login password again" data-meta="Field" id="rePassword" value="" autocomplete="new-password" height="100%">
                </span><!-- react-text: 63 --> <!-- /react-text -->
                <div class=""></div><!-- react-text: 65 --> <!-- /react-text -->
              </div>
            </div> --}}
            <div class="next-form-item next-row biz-form-component-Input-field-item union_reg" label="Email Address:">
              <label for="name" required="" class="next-col-8 next-form-item-label">
                Họ Tên:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input name="name" required type="text" placeholder="Nhập Họ và Tên." value="" data-meta="Field" id="name" autocomplete="new-password" height="100%">
                </span><!-- react-text: 46 --> <!-- /react-text -->
                <div class=""></div><!-- react-text: 48 --> <!-- /react-text -->
              </div>
            </div>
            <div class="next-form-item next-row biz-form-component-Input-field-item union_reg" label="Email Address:">
              <label for="phone" required="" class="next-col-8 next-form-item-label">
                Số điện thoại:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input name="phone" required type="text" placeholder="Nhập số điện thoại." value="" data-meta="Field" id="phone" autocomplete="new-password" height="100%">
                </span><!-- react-text: 46 --> <!-- /react-text -->
                <div class=""></div><!-- react-text: 48 --> <!-- /react-text -->
              </div>
            </div>
            <div class="next-form-item next-row biz-form-component-Input-field-item union_reg" label="Email Address:">
              <label for="address" required="" class="next-col-8 next-form-item-label">
                Địa chỉ:
              </label>
              <div class="next-col-10 next-form-item-control">
                <span class="next-input next-input-single next-input-large">
                  <input name="address" required type="text" placeholder="Nhập địa chỉ của bạn." value="" data-meta="Field" id="address" autocomplete="new-password" height="100%">
                </span><!-- react-text: 46 --> <!-- /react-text -->
                <div class=""></div><!-- react-text: 48 --> <!-- /react-text -->
              </div>
            </div>
            <div class="next-row biz-form-action-container">
              <div class="next-col next-col-offset-8">
                <button type="submit" class="next-btn next-btn-primary next-btn-large login-btn" style="margin-right: 12px;">
                  Đăng ký
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>
</html>