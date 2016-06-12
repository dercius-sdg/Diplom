/**
 * Created by ХП on 12.06.2016.
 */
$(document).ready(function() {
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
        )
}
);