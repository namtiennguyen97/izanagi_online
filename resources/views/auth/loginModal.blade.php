<div class="modal fade modal-cuz" id="pop-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <a class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i><span><span>
                    CLOSE</span></span></a>
        <div style="display: block;" class="modal-content" id="modal-login">
            <div class="login-cover"><i class="icon-logo"></i>
                <div class="caption"><span><span>Âm nhạc tốt nhất </span></span><strong><span><span>trực
                                tuyến</span></span></strong></div>
            </div>
            <div class="modal-body">
                <div class="mb-header">
                    <h6><span><span>Đăng nhập</span></span></h6>
                    <a onclick="show_register()" class="btn btn-sm btn-default pull-right" title="Đăng ký"><i
                            class="icon-plus"></i><span><span> Đăng ký</span></span></a>
                </div>
                <br>
                <form id="login-form" class="form-material">
                    <div class="block">
                        <input type="text" class="form-control" name="username" id="username"
                               placeholder="Username">
                    </div>
                    <div class="block mt10">
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password">
                    </div>
                    <div class="block mt10">
                        <!-- Google reCaptcha -->
                        <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY')  }}"></div>
                        <!-- End Google reCaptcha -->
                    </div>
                    <button type="submit" id="login-submit" class="btn btn-block btn-lg btn-orange mt30"><span>Đăng
                                nhập</span></button>
                    <div class="login-via block">
                        <div class="pull-left"><a id="open-forgot" onclick="show_forgot()" data-target="#pop-login"
                                                  title="Quên mật khẩu?"><span><span>Quên mật khẩu?</span></span></a>
                        </div>
                        <div class="pull-right">
                            <span>Đăng nhập với</span>
                            <a target="_blank" href="{{route('login.facebook','facebook')}}" class="social-color" title=""><i
                                    class="icon-facebook"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        <div style="display: none;" class="modal-content" id="modal-register">
            <div class="login-cover"><i class="icon-logo"></i>
                <div class="caption"><span><span>Âm nhạc tốt nhất </span></span><strong><span><span>trực
                                tuyến</span></span></strong></div>
            </div>
            <div class="modal-body">
                <div class="mb-header">
                    <h6><span><span>Đăng ký</span></span></h6>
                    <a onclick="show_login()" class="btn btn-sm btn-default pull-right"
                       title="Quay lại đăng nhập"><span><span>Quay lại đăng nhập</span></span></a>
                </div>
                <p class="desc"><span><span>Khi trở thành thành viên của trang web, bạn có thể sử dụng đầy đủ các chức
                            năng và thưởng thức âm nhạc thú vị nhất.</span></span></p>
                <div id="content-form-register">
                    <form id="register-form" class="form-material">
                        @csrf
                        <div id="error-text" class="alert alert-danger error-message"></div>
                        <div class="block">
                            <input type="text" class="form-control" name="fullname" id="full_name"
                                   placeholder="Full name" >
                        </div>
                        <div class="block mt10">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                            >
                        </div>
                        <div class="block mt10">
                            <input type="email" class="form-control" name="email" id="Email" placeholder="Email"
                            >
                        </div>
                        <div class="block mt10">
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password" >
                        </div>
                        <div class="block mt10">
                            <input type="password" class="form-control" name="password_confirmation" id="confirm"
                                   placeholder="Confirm Password" >
                        </div>
                        <div class="block row mt10">
                            <div class="input-datepicker-custom">
                                <input type="text" name="birthday" class="form-control dateControl" placeholder="Birthday">
                            </div>
                        </div>
                        <div class="block row mt10">
                            <div class="col-md-3 col-xs-4">
                                <label class="inline">
                                    <input type="radio" name="gender" value="0" class="ace" checked required="">
                                    <span class="lbl"></span>
                                </label> N/A
                            </div>
                            <div class="col-md-3 col-xs-4">
                                <label class="inline">
                                    <input type="radio" name="gender" value="1" class="ace"  required="">
                                    <span class="lbl"></span>
                                </label> Nam
                            </div>
                            <div class="col-md-3 col-xs-4">
                                <label class="inline">
                                    <input type="radio" name="gender" value="2" class="ace" required="">
                                    <span class="lbl"></span>
                                </label> Nữ
                            </div>
                        </div>
                        <div class="block mt10">
                            <label class="inline">
                                <input type="checkbox" class="ace" name="confirm_policy">
                                <span class="lbl"></span> Tôi đồng ý với các
                                <a href="#">Điều khoản</a> trên website

                            </label>
                        </div>
                        <div id="register-error" class="alert alert-danger mt10 error-message"></div>
                        <button type="submit" id="register-submit" class="btn btn-block btn-orange btn-lg mt20">Đăng
                            ký
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div style="display: none;" class="modal-content" id="modal-forgot">
            <div class="login-cover"><i class="icon-logo"></i>
                <div class="caption"><span><span>Âm nhạc tốt nhất </span></span><strong><span><span>trực
                                tuyến</span></span></strong></div>
            </div>
            <div class="modal-body">
                <div class="mb-header">
                    <h6><span><span>Quên mật khẩu</span></span></h6>
                    <a onclick="show_login()" class="btn btn-sm btn-default pull-right"
                       title="Quay lại đăng nhập"><span><span>Quay lại đăng nhập</span></span></a>
                </div>
                <p class="desc"><span><span>Chúng tôi sẽ gửi mã ủy quyền cho email của bạn. </span><span>Vui lòng điền
                            vào mẫu dưới đây.</span></span></p>
                <form class="form-material" id="forgot-form">
                    <div class="block mt10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                    </div>
                    <div style="display: none;" id="forgot-success-message" class="alert alert-success"></div>
                    <div style="display: none;" id="forgot-error-message" class="alert alert-danger"></div>
                    <button id="forgot-submit" type="submit" class="btn btn-block btn-orange btn-lg mt20"><span><span>Gửi
                                yêu cầu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-cuz" id="change-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <a class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i><span><span>
                    CLOSE</span></span></a>
        <div style="display: block;" class="modal-content" id="modal-change">
            <div class="login-cover"><i class="icon-logo"></i>
                <div class="caption"><span>Nghe nhạc online mọi lúc mọi nơi </span></div>
            </div>
            <div class="modal-body">
                <div class="mb-header">
                    <h6><span><span>Đổi mật khẩu</span></span></h6>
                </div>
                <br>
                <div class="clear-fix"></div>
                <form id="change-password-form" class="form-material">
                    <div class="block">
                        <input type="password" class="form-control" name="old_password"
                               placeholder="Old Password">
                    </div>
                    <div class="block mt10">
                        <input type="password" class="form-control" name="new_password"
                               placeholder="New Password">
                    </div>
                    <div class="block mt10">
                        <input type="password" class="form-control" name="new_password_confirmation"
                               placeholder="Re-Password">
                    </div>
                    <div id="change-password-error" class="alert alert-danger mt10 error-message"></div>
                    <button type="submit" id="change-submit" class="btn btn-block btn-lg btn-orange mt30"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-cuz" id="edit-song" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <a class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i><span><span>
                    CLOSE</span></span></a>
        <div style="display: block;" class="modal-content" id="modal-change">
            <div class="login-cover"><i class="icon-logo"></i>
                <div class="caption"><span><span>Âm nhạc tốt nhất </span></span><strong><span><span>trực
                                tuyến</span></span></strong></div>
            </div>
            <div class="modal-body">
                <div class="mb-header">
                    <h6><span><span>Edit Song</span></span></h6>
                </div>
                <br>
                <div class="clear-fix"></div>
                <form id="login-form" class="form-material">
                    <div class="block">
                        <input type="password" class="form-control" name="old_password" id="username"
                               placeholder="Old Password">
                    </div>
                    <div class="block mt10">
                        <input type="password" class="form-control" name="new_password"
                               placeholder="New Password">
                    </div>
                    <div class="block mt10">
                        <input type="password" class="form-control" name="re-password"
                               placeholder="Re-Password">
                    </div>
                    <div id="change-password-error" class="alert alert-danger mt10 error-message"></div>
                    <button type="submit" id="login-submit" class="btn btn-block btn-lg btn-orange mt30"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-main modal-report in" id="pop-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Báo lỗi</h4>
            </div>
            <div class="modal-body">
                <div id="report-success" class="alert alert-success mt10 error-message"></div>
                <form id="report-form" role="form" method="post">
                    <input type="hidden" name="type" value="tracks">
                    <input type="hidden" name="itemid" value="1">
                    <div class="report-textarea">
                        <p>
                            Vui lòng chọn cụ thể các mục bên dưới để thông báo cho chúng tôi biết vấn đề bạn gặp phải đối với bài hát này.
                        </p>
                        <p><input type="radio" name="error" value="1" required> Play quá chậm</p>
                        <p><input type="radio" name="error" value="2" required> Không play được</p>
                        <p><input type="radio" name="error" value="3" required> Chất lượng kém</p>
                        <p><input type="radio" name="error" value="4" required> Không download được</p>
                        <p><input type="radio" name="error" value="5" required> Lỗi khác</p>
                    </div>
                    <div id="report-error" class="alert alert-danger mt10 error-message"></div>
                    <div class="report-btn text-center mt20">
                        <button id="report-submit" class="btn btn-orange mr5">Send</button>
                        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="pop-playlist-show" class="popover hidden">
    <h3 class="popover-title">Add to playlist</h3>
    <div class="popover-content">
    </div>
</div>
<div id="pop-download-show" class="popover hidden">
    <h3 class="popover-title">Download</h3>
    <div class="popover-content" id="pop-download">
        <div class="pds-content"></div>
    </div>
</div>
<script>

    $(document).ready(function () {
        $('.dateControl').datepicker({
            todayHighlight: false,
            toggleActive: true,
            defaultViewDate: { year: 2000},
            format: "yyyy-mm-dd",
            autoclose: true
        });
    });




</script>

