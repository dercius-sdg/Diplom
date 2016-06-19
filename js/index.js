/**
 * Created by ХП on 12.06.2016.
 */
$(document).ready(
    function() {
    $("#descr").find("li").hover(
        function () {
            $(this).css("background", "black");
            $(this).find("a").css("color","white");
            $(this).css("cursor","pointer");
        },
        function () {
            $(this).css("background","none");
            $(this).find("a").css("color","black");
            $(this).css("cursor","auto");
        }
    );
        $("#descr").find("li").click(
            function()
            {
                if($(this).find("a"))
                {
                    document.location.href=$(this).find("a").attr("href");
                }
            }
        );
        setInterval(
            function()
            {
                var portfolios=$(".portfolio").toArray();

                function setIntervalForSliding(counter_inner) {
                    setTimeout(
                        function () {
                            var left_css_string = $(portfolios[counter_inner]).find("ul").css("left");
                            left_css_string = left_css_string.substr(0, left_css_string.length - 2);
                            var left_css = +left_css_string;
                            if (left_css > ($(portfolios[counter_inner]).find("ul").find("li").length-1)*(-500)) {
                                $(portfolios[counter_inner]).find("ul").animate(
                                    {
                                        left: left_css - 500
                                    }, 1000
                                );
                            }
                            else {
                                $(portfolios[counter_inner]).find("ul").css("left","0");
                                $(portfolios[counter_inner]).find("ul").animate(
                                    {
                                        left: - 500
                                    }, 1000
                                );
                            }
                        }, 7000
                    );
                }

                for(var counter=0;counter<portfolios.length;counter++)
                {
                    setIntervalForSliding(counter);
                }
            },5000
        );
        $("#more-comments").click(function()
            {
                var left_css_string = $("#comment-ribbon").find("ul").css("left");
                left_css_string = left_css_string.substr(0, left_css_string.length - 2);
                var left_css = +left_css_string;
                if(left_css<=-3350) {
                    $("#comment-ribbon").find("ul").css("left","0");
                    left_css=0;
                }
                $("#comment-ribbon").find("ul").animate(
                    {
                        left: left_css - 670
                    }, 1000
                );
            }
        );
}
);