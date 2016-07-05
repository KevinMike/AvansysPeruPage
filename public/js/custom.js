$(document).on('ready',function () {
    $("#element").introLoader({
        animation: {
            name: 'lettersLoader',
            options: {
                ease: "easeInOutCirc",
                style: 'light',
                delayBefore: 0,
                delayAfter: 0,
                exitTime: 0,
                loaderText: 'Cecap Avansys Perú',
                lettersDelayTime: 0
            }
        }
    });

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=239165883107974";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
});