<!doctype html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LoveMeter - Máy Tính Tình Yêu Thực</title>
    <link href="https://vn.lovemeter.me/public/css/font-awesome.css?v=20191113" rel="stylesheet" type="text/css" />
    <link href="https://vn.lovemeter.me/public/css/bootstrap.css?v=20191113" rel="stylesheet" type="text/css" />
    <link href="https://vn.lovemeter.me/public/css/style.css?v=20191113" rel="stylesheet" type="text/css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127076602-18"></script>
</head>

<div class="container custom_container">
    <nav class="menubar">
        <div class="heading">
            <span class="logo"> 
                      <img src="logo.gif" alt="">
                 </span>
        </div>
    </nav>

    <div class="main_sec">
        <div class="main_area">
            <div id="quizDiv" class="main_box">
                <img src="logo.gif">
                <img src="girl.png">
                <p class="register_text1">Muốn biết bạn bè của bạn đang thích ai? Máy Tính Tình Yêu sẽ giúp bạn tìm ra người đó.</p>

                <div class="instruction">
                    <p>Hãy đăng ký & Chia sẻ đường dẫn của bạn.</p>
                    <p>Kiểm tra Người Mà Bạn Bè Của Bạn Thích trên đường dẫn Bí Mật của bạn.</p>
                </div>
                <input required placeholder="Nhập họ tên của bạn " name="name" type="text" id="name1" maxlength="25" value="">
                <input required placeholder="Nhập họ tên của người ấy " name="name" type="text" id="name2" maxlength="25" value="">
                <br>
                <br/>

                <button onclick="saveUserQuiz()" class="register-button" id="register">
                    <span class="custom-button-txt">♥&nbsp;&nbsp;Kiểm tra&nbsp;&nbsp;♥</span>
                </button>

            </div>

        </div>

    </div>

    <div class="footer">

        <div class="footer_button_img">
            <ul>
                <li>
                    <a href="https://www.facebook.com/Love-Meter-1769007649899610/" target="_blank">
                        <img src="https://vn.lovemeter.me/public/images/footer/facebook.png">
                    </a>
                </li>
                <li class="footer_button_cover">
                    <a href="https://www.instagram.com/lovemeter2/" target="_blank">
                        <img src="https://vn.lovemeter.me/public/images/footer/instagram.png">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/LoveMeter2" target="_blank">
                        <img src="https://vn.lovemeter.me/public/images/footer/twitter.png">
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer_menu">
            <ul>
                <li><a href="https://vn.lovemeter.me/about-us">About Us </a></li>
                <li><a href="https://vn.lovemeter.me/privacy-policy">Privacy Policy </a></li>
                <li><a href="https://vn.lovemeter.me/terms-of-use">Terms & Conditions </a></li>
                <li><a href="https://vn.lovemeter.me/faq">FAQs </a></li>
            </ul>

            <p><b>Disclaimer:</b> All content is provided for fun and entertainment purposes only</p>
            <p> &copy; 2020 LoveMeter All rights Reserved</p>
        </div>
    </div>

    </body>


<script src='jquery.min.js'></script>
<script src='app.js'></script>
</html>