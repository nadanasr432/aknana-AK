(function ($) {
    "use strict";

    // Open submenu on hover in compact sidebar mode and horizontal menu mode
    $(document).on(
        "mouseenter mouseleave",
        ".sidebar .nav-item",
        function (ev) {
            var body = $("body");
            var sidebarIconOnly = body.hasClass("sidebar-icon-only");
            var sidebarFixed = body.hasClass("sidebar-fixed");

            if (!("ontouchstart" in document.documentElement)) {
                if (sidebarIconOnly) {
                    if (sidebarFixed && ev.type === "mouseenter") {
                        body.removeClass("sidebar-icon-only");
                    } else if (!sidebarFixed) {
                        var $menuItem = $(this);
                        $menuItem.toggleClass(
                            "hover-open",
                            ev.type === "mouseenter"
                        );
                    }
                }
            }
        }
    );

    // Toggle slide for chat list wrapper
    $(".aside-toggler").click(function () {
        $(".chat-list-wrapper").toggleClass("slide");
    });

    // Close submenu when clicking outside
    $(document).click(function (event) {
        var $target = $(event.target);

        // Check if the clicked element is not a submenu or its toggle
        if (
            !$target.closest(".nav-item").length &&
            !$target.closest(".nav-link").length
        ) {
            $(".sidebar .nav-item").removeClass("hover-open");
        }
    });
})(jQuery);
