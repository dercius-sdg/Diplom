/**
 * Created by ХП on 15.05.2016.
 */
var intervalHandler;
$(document).ready(function() {
        function setIntervalForFading() {
            intervalHandler = setTimeout(
                function () {
                    $("#triangle_container").fadeOut(400);
                }, 1000
            );
        }

        $("#icon-checking").hover(function()
        {
            clearInterval(intervalHandler);
            $("#triangle_container").fadeIn(300);
        }, function () {
            setIntervalForFading();
        });
        $("#triangle_container").hover(function()
        {
            clearInterval(intervalHandler);
        },function()
            {
                 setIntervalForFading();
            });

}
);

function toRegPage() {
    document.location.href = "public html/Registration.html"
}