/**
 * Created by ХП on 15.05.2016.
 */
$(document).ready(function() {
        $("#icon-checking").hover(function()
        {
            $("#triangle_container").fadeIn(300);
        },function(){});
        $("#wrapper").hover(function()
        {
            $("#triangle_container").fadeOut(400);
        },function(){});

}
);

function toRegPage() {
    document.location.href = "public html/Registration.html"
}