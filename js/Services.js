/**
 * Created by ХП on 12.06.2016.
 */
$(document).ready(
    function()
    {
        var interval=setInterval(
            function()
            {
                var left_css=$("#photo_gallery").find("ul").css("left");
                if(left_css>-1169) {
                    $("#photo_gallery").find("ul").animate(
                        {
                            left:left_css-568
                        },1000
                    );
                }
                else
                {
                    $("#photo_gallery").find("ul").animate(
                        {
                            left:"3px"
                        },1000
                    );
                }
            },1000
        )
    }
);