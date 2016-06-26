/**
 * Created by derci on 23.06.2016.
 */
$(document).ready(
    function()
    {
        console.log($("body").height());
        console.log($("#header").height());
        console.log($("footer").height());
        $("#bordered-shadow").height($("body").height()-$("footer").height()-$("#header").height()+650);

    }
);