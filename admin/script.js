(function() {
    var path = window.location.href;
    $(".nav-link").each(function() {
        var href = $(this).attr('href');
        // console.log(href);
        if (path == decodeURIComponent(href)) {
            $(this).addClass('active');
            var parent = $(this).closest('.has-treeview');
            parent.addClass('menu-open');
            $(parent).find('.nav-link').first().addClass('active');
        };
    });
}());

