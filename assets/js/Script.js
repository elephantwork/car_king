$(function () {
    $('#twzipcode').twzipcode();
    
    var qa_data = null,
        qa_current = null,
        qa_num = 0,
        qa_error = 0;

    $.ajaxSetup({
        cache: false
    });

    $.getJSON("assets/js/question.json?v1", function (data) {
        qa_data = data;
        initQA();
    });

    $("#btn-tips").click(function () {
        $("#tips-wrap").show();
    });

    $('#qa-content .options').on('click', 'li input', function () {
        var answer = $(this).data('answer');

        if (answer) {
            if (qa_error == 0) {
                $("#score").val(parseInt($("#score").val()) + 1);
            }

            if (qa_num + 1 >= qa_current.question.length) {
                $("#tips-wrap").hide();
                $("#section-qa .qa-game").hide();
                $("#section-qa .qa-form").show();
            }
            else {
                nextQA();
            }
        } else {
            ++qa_error;

            $(this).closest("ul").find("li.field.error").removeClass("field error");
            $(this).closest("ul").find("li .error-wrap").remove();
            $(this).closest("li").addClass("field error");

            $error = $('<div>').addClass('error-wrap');
            $error.append($('<div>').addClass('symbol'));
            $error.append($('<div>').addClass('text').text('答錯囉，請重新選擇！'));
            $(this).parent().after($error);
            $("#tips-wrap").show();
        }
    });
    
    $("#play-button").click(function() {
        initQA();
        $(".is-game").addClass("active");
        $(window).scrollTop($("#section-qa").offset().top);
    })

    function initQA() {
        var _qa_current = {
            title: qa_data.topic[0].title,
            question: qa_data.topic[0].question
        };
        qa_current = JSON.parse(JSON.stringify(_qa_current));
        qa_num = 0;
        qa_error = 0;
        innerQA();
        $("#score").val(0);
        $("#section-qa .qa-form, #section-qa .brand, #section-qa .qa-finish").hide();
        $("#section-qa .qa-game").show();
    }

    function nextQA() {
        ++qa_num;
        innerQA();
    }

    function innerQA() {
        $("#qa-topic").text(qa_current.question[qa_num].title);

        $("#qa-content .question").text("")
            .append($("<strong>").addClass("num").text(qa_num + 1))
            .append(qa_current.question[qa_num].text);

        var symbol = ['A', 'B', 'C', 'D', 'E']
        var $options = $("#qa-content .options");
        $options.empty();
        qa_current.question[qa_num].options.forEach(function (q, i) {
            $options.append(
                $("<li>").append(
                    $("<label>").addClass("inside-label style-label")
                        .append($("<input>").attr("type", "radio").attr("name", "question").data("answer", q.answer))
                        .append($("<span>").addClass("checkvalue").text(`${ symbol[i] } ${ q.text }`))
                        .append($("<span>").addClass("checkmark"))
                )
            );
        });

        $("#tip-num").text(qa_num + 1);
        $("#tips-wrap").hide();
        $("#tips-text").text(qa_current.question[qa_num].tip);
        qa_error = 0;
    }
});

function showFinish() {
    qaCompleted();
    $(".is-game").removeClass("active");
}

function qaCompleted() {
    var score = $("#score").val();
    var urlshare='';
    var t1 = 0, t2 = '';
    if (score <= 2) {
        t1 = 10;
        t2 = '<p>嗚嗚，你與未來移動居然是繞地球一圈的距離！”</p>'
        urlshare=1;
    }
    else if (score >= 3 && score <= 5) {
        t1 = 50;
        t2 = '<p>哇！你與未來移動是台北到高雄的距離！”</p>';
        urlshare=2;
    }
    else if (score >= 6 && score <= 7) {
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
    $("#section-qa .qa-game, #section-qa .qa-form").hide();
    $("#section-qa .brand, #section-qa .qa-finish").show();
    $('#rpic').attr('src', './assets/images/qa-distance'+urlshare+'.png');
    //$('#qa-topic-type li button').attr('disabled', true).text('Done!');
    //resizeQAShadow();
    
    //html2canvas(document.querySelector("#qa-finish-wrap")).then(canvas => {
    //    var base64 = canvas.toDataURL("image/jpeg", 1.0);
        //$('#sharePic').attr('src', base64);
        $('#rpic').attr('src', './assets/images/qa-distance'+urlshare+'.png');
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