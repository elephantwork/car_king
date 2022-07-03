var qa_error = 0;
$(function () {
    $('#twzipcode').twzipcode();
    
    var qa_data = null,
        qa_current = null,
        qa_num = 0,
        qa_progress = 0;

    $.ajaxSetup({
        cache: false
    });
    $.getJSON("js/question.json?v1", function (data) {
        qa_data = data
    });

    $(window).resize(function () {
        //resizeQAShadow()
        resizeSwiperSlide('#swiper2 .swiper-container .swiper-slide')
    })

    $('#toggle-nav').click(function () {
        $('#nav-list').fadeIn();
        $('#nav-close').fadeIn();
    });

    $('#nav-close').click(function () {
        $('#nav-list').fadeOut();
        $('#nav-close').fadeOut();
    });

    $('#nav-list li a').click(function () {
        if (window.innerWidth <= 991) {
            $('#nav-list').fadeOut();
            $('#nav-close').fadeOut();
        }
    });

    $('#btn-method').click(function () {
        $(this).toggleClass('active');
        $(this).closest('section').find('.event-method').toggleClass('active');
        goto($('#section-4').offset().top);
    });

    $('#btn-tips').click(function () {
        $('#tips-wrap .tips-content').addClass('active');
    });

    $('body').on('click', '.radio-wrap input[type=radio]', function () {
        var name = $(this).attr('name');
        $(`.radio-wrap input[type=radio][name=${name}]`).parent().removeClass('active')
        $(this).parent().addClass('active');
    });

    $('#qa-content .options').on('click', 'li label', function () {
        var answer = $(this).data('answer');

        if (answer) {
            if (qa_num + 1 >= qa_current.question.length) {
                $("#csn").val(qa_progress);
                $('#tip-wrap .tip-content').removeClass('active');
                $('#section-qa .qa-game').removeClass('active');
                $('#section-qa .qa-form').addClass('active');
                //resizeQAShadow();
                /*
                $('#qa-topic-type li').eq(qa_progress).find('button').attr('disabled', true).text('Done!');

                if (qa_progress + 1 >= 4) {
                    $('#section-qa .qa-game').removeClass('active');
                    $('#section-qa .qa-form').addClass('active');
                    resizeQAShadow();
                }
                else {
                    $('#section-qa').slideUp();
                    goto($('#qa-topic-type').offset().top);
                    qa_current = null;
                    ++qa_progress;
                }
                */
            }
            else {
                nextQA();
            }
        } else {
            //console.log(typeof qa_current.question[qa_num].error == 'undefined');
            if (typeof qa_current.question[qa_num].error == 'undefined') {
                ++qa_error;
                $("#errorcount").val($("#errorcount").val()+qa_num+',')
                qa_current.question[qa_num].error = true;
            }
            //console.log(qa_error);

            $(this).closest('ul').find('li button.active').removeClass('active');
            $(this).closest('ul').find('li .text, li .symbol').remove();
            $(this).addClass('active');
            $error = $('<div>').addClass('error-wrap');
            $error.append($('<div>').addClass('symbol'));
            $error.append($('<div>').addClass('text').text('答錯囉，請重新選擇！'));
            $(this).after($error);
            $('#tip-wrap .tip-content').addClass('active');
        }
    });

    $('#start-btn').click(function() {
        if ($('#section-qa').is(':hidden')) {
            var _qa_current = {
                title: qa_data.topic[0].title,
                question: qa_data.topic[0].question
            };
            qa_current = JSON.parse(JSON.stringify(_qa_current));
            initQA();
        }
    });
    

//    $('#reset-btn').click(function() {
//        var _qa_current = {
//            title: qa_data.topic[0].title,
//            question: qa_data.topic[0].question
//        };
//        qa_current = JSON.parse(JSON.stringify(_qa_current));
//        initQA();
//    })

    function initQA() {
        $("#errorcount").val('');
    $("#sharefb").attr("href",'https://www.facebook.com/sharer/sharer.php?u=https://financeking.storm.mg/');
    $("#shareline").attr("href",'https://social-plugins.line.me/lineit/share?url=https://financeking.storm.mg/');
        qa_num = 0;
        qa_error = 0;
        //$('#qa-topic').text(`[ ${qa_current.title} ]`);
        innerQA();
        $('#section-qa .qa-finish, #section-qa .qa-form').removeClass('active');
        $('#section-qa .qa-game').addClass('active');
        $('#section-qa').slideDown();
        goto($('#section-qa').offset().top);
        //resizeQAShadow();
    }

    function nextQA() {
        ++qa_num;
        innerQA();
        //resizeQAShadow();
    }

    function innerQA() {
        $('#qa-content .num').text(qa_num + 1);
        $('#tip-num').text(qa_num + 1);
        $('#qa-topic').text(`[ ${qa_current.question[qa_num].title} ]`);
        $('#qa-content .question').text(qa_current.question[qa_num].text);
        $('#tip-wrap .tip-content').removeClass('active');
        $('#tip-text').text(qa_current.question[qa_num].tip);

        var symbol = ['A', 'B', 'C', 'D', 'E']
        var $options = $('#qa-content .options');
        $options.empty();
        qa_current.question[qa_num].options.forEach(function (q, i) {
            $options.append($('<li>').html($('<button>').attr('type', 'button').data('answer', q.answer).html(`<span>${symbol[i]}</span> ${q.text}`)));
        });
    }
    setTimeout(() => {
        resizeSwiperSlide('#swiper2 .swiper-container .swiper-slide')
    }, 1000);
});

function qaCompleted() {
    var score = 9 - qa_error;
    var urlshare='';
    var t1 = 0, t2 = '';
    if (score <= 4) {
        t1 = 10;
        t2 = '<p>嗚嗚，你與未來移動居然是繞地球一圈的距離！”</p>'
        urlshare=1;
    }
    else if (score >= 5 && score <= 8) {
        t1 = 50;
        t2 = '<p>哇！你與未來移動是台北到高雄的距離！”</p>';
        urlshare=2;
    }
    else if (score >= 9 && score <= 11) {
        t1 = 80;
        t2 = '<p>太好了！你與未來移動只有一圈操場的距離！”</p>';
        urlshare=3;
    }
    else {
        t1 = 100;
        t2 = '<p>恭喜你！你與未來移動只有一個紅綠燈的距離！”</p>'
        urlshare=4;
    }
    $("#sharefb").attr("href",$("#sharefb").attr("href")+'?fbi='+urlshare);
    $("#shareline").attr("href",$("#shareline").attr("href")+'?fbi='+urlshare);
    $('#result-num').html(t1 + '<span>%</span>')
    $('#result-text').html(t2);
    $('#section-qa').show();
    $('#section-qa .qa-game, #section-qa .qa-form').removeClass('active');
    $('#section-qa .qa-finish').addClass('active');
    $('#rpic').attr('src', '/assets/images/qa-distance'+urlshare+'.png');
    //$('#qa-topic-type li button').attr('disabled', true).text('Done!');
    //resizeQAShadow();
    
    //html2canvas(document.querySelector("#qa-finish-wrap")).then(canvas => {
    //    var base64 = canvas.toDataURL("image/jpeg", 1.0);
        //$('#sharePic').attr('src', base64);
        $('#rpic').attr('src', '/assets/images/qa-distance'+urlshare+'.png');
        $('#loading-wrap').fadeOut();
    //});
}
                          
$(window).scroll(function() {
    if ($(this).scrollTop() > 768) {
        $('.scroll-top').addClass('is-active');
    } else {
        $('.scroll-top').removeClass('is-active');
    }
});