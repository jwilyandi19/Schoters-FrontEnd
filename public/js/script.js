window.onload = function (ev) {
    var count = 0;
    var chosen = [];
    var res = $("#result");
    $(".prefer-btn").each(function(i, el){
        $(el).click(function(e){
            res.val(res.val().replace("#"+i.toString(),""));
            if($(el).hasClass("active-btn")){
                $(el).removeClass("active-btn");
                count--;
            }else if (count <5){
                $(el).addClass("active-btn");
                res.val(res.val()+"#"+i.toString());
                count++;
            }
            console.log(res.val());
        });
    });
};