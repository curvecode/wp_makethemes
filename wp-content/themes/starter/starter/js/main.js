(function() {
    var waterWhy = {
        init: function() {
            console.log("Toi ne");
            jQuery(".slider-inner").bxSlider({
                mode: 'vertical',
                controls: false,
                pager: true,
                auto: true
            });
        }
    };

    waterWhy.init();
})();