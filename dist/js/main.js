$(function () {
    $('#login-form-link').click(function (e) {
        $('#login-form')
            .delay(100)
            .fadeIn(100);
        $('#register-form').fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
        $('#register-form')
            .delay(100)
            .fadeIn(100);
        $('#login-form').fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('.modal').on('shown.bs.modal', function () {
        $('.modal-body').css('padding', '0px');
        $('.modal-body').css('margin', '0px');
        $('.modal-dialog').css({
            position: 'relative',
            display: 'table',
            'overflow-y': 'auto',
            'overflow-x': 'auto',
            width: 'auto',
            'min-width': '10px'
        });
    });
});

//google search function
(function () {
    var cx = '008751495031039905891:e0l3ljamk6k';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
})();
