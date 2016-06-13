/**
 * Created by ХП on 12.06.2016.
 */
$(document).ready(
    function()
    {
        var interval=setInterval(
            function()
            {
                var left_css_string=$("#photo_gallery").find("ul").css("left");
                left_css_string=left_css_string.substr(0,left_css_string.length-2);
                var left_css=+left_css_string;
                if(left_css>-1169) {
                    $("#photo_gallery").find("ul").animate(
                        {
                            left:left_css-586.7
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
            },5000
        )
    }
);