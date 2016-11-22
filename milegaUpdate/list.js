jQuery(document).ready(function() {

    $(".goo-collapsible a").on("click", function(e) {

        if (!$(this).hasClass("active")) {
            // open our new menu and add the open class
            $(this).next("ul").slideDown(350);
            $(this).addClass("active");

        } else if ($(this).hasClass("active")) {

            $(this).removeClass("active");
            $(this).next("ul").slideUp(350);
        }
    });
});
