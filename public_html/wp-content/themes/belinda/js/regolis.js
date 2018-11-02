
jQuery(function ($) {
    var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 500, reverse: false}});

    $('.animate-on-30').each(function(){
        new ScrollMagic.Scene({triggerElement: this, triggerHook: 0.3}) // トリガー要素
            .on("start", function (event) {

                var element = event.target.triggerElement();

                $(element).toggleClass('animate-active');

            })
            .addTo(controller);
    });

    $('.animate-on-70').each(function(){
        new ScrollMagic.Scene({triggerElement: this, triggerHook: 0.7}) // トリガー要素
            .on("start", function (event) {

                var element = event.target.triggerElement();

                $(element).toggleClass('animate-active');

            })
            .addTo(controller);
    });
});
