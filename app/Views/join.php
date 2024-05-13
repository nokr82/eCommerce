<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once "layout/head.php"; ?>
</head>
<body class="animsition">

<!-- Header -->
<header class="header-v4">
    <?php include_once "layout/header.php"; ?>
</header>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/assets/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        회원가입
    </h2>
</section>
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <main class="form-signin">
            <div>

                <div class="mb-3">
                    <label for="login_id" class="form-label">아이디</label>
                    <input type="text" class="form-control" id="login_id" placeholder="아이디">
                </div>
                <div class="mb-3">
                    <label for="pw" class="form-label">비밀번호</label>
                    <input type="password" class="form-control" id="pw" placeholder="비밀번호">
                </div>

                <div class="mb-3">
                    <label for="pw2" class="form-label">비밀번호 확인</label>
                    <input type="password" class="form-control" id="pw2" placeholder="비밀번호">
                </div>

                <div class="mb-3">
                    <label for="user_nm" class="form-label">이름</label>
                    <input type="text" class="form-control" id="user_nm" placeholder="이름">
                </div>

                <div class="mb-3">
                    <label for="user_nm" class="form-label">주소</label>
                    <input type="text" class="form-control" id="addr" placeholder="주소">
                </div>
                <div class="mb-3">
                    <label for="user_nm" class="form-label">핸드폰번호</label>
                    <input type="text" class="form-control" id="phone_num" placeholder="핸드폰번호">
                </div>

                <div class="text-center">
                    <button class=" btn btn-lg btn-dark m-4" id="join_btn" type="submit">가입하기</button>
                </div>

            </div>
        </main>
    </div>
</section>


<?php include_once "layout/footer.php"; ?>


</body>

<!--===============================================================================================-->
<script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/bootstrap/js/popper.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/slick/slick.min.js"></script>
<script src="/assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function (e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function () {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function () {
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="/assets/js/main.js"></script>

<script>
    $('#join_btn').click(function () {
        $.ajax({
            type: 'post',
            url: '../ajax/add_card.php',
            data: {'board_type': board_type},
            dataType: 'json',
            error: function (xhr, status, error) {
                alert(error + xhr + status);
            },
            success: function (data) {
                console.log(data);
                if (data.success == 'ok') {

                }
            },
        });

        window.ReactionButtonType = 'reaction';
        window.ReactionApiUrl = '//devfuryhong.tistory.com/reaction';
        window.ReactionReqBody = {
            entryId: 4
        }

    }

</script>

</body>
</html>
