/**
 * Created by derci on 21.06.2016.
 */
$(document).ready(
    function()
    {
        $("#eq-list").find("ul").find("li").click(
            function () {
                $(".clicked").toggleClass("clicked");
                $(this).toggleClass("clicked");
                if($("#eq-image-container").children().length==0)
                {
                    $("#eq-image-container").append("<img id='eq-image' class='img-responsive img-rounded'>");
                }
                $("#eq-image").attr("src",$(this).attr("data-src"));
            }
        );
        $(".icon").click(
            function()
            {
                $(this).parent().toggleClass("selected");
            }
        );
        $("#apart-list").find("ul").find("li").click(
            function () {
                $(".clicked").toggleClass("clicked");
                $(this).toggleClass("clicked");
                if($("#apart-image-container").children().length==0)
                {
                    $("#apart-image-container").append("<img id='apart-image' class='img-responsive img-rounded'>");
                }
                $("#apart-image").attr("src",$(this).attr("data-src"));
            }
        );
    }
);