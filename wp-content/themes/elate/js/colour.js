(function () {
    $('#colour-variations ul').styleSwitcher({
        defaultThemeId: 'theme-switch-css',
        hasPreview: false,
        fullPath: theme_url+'/css/',
        cookie: {
            expires: 30,
            isManagingLoad: true
        }
    });
    $('.option-toggle').click(function () {
        $('#colour-variations').toggleClass('sleep');
    });
})();