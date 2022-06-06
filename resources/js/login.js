window.$ = window.jQuery = require('jquery')

$(document).ready(() => {
    if (window.location.pathname === "/registration") {
        $('.cont').toggleClass('s--signup');
    }
    $('.img__btn').on('click', function () {
        $('.cont').toggleClass('s--signup');
        if ($('.cont').hasClass('s--signup')) {
            let stateObj = {id: "100"};
            window.history.replaceState(stateObj, "Reg", "/registration");
            // window.location.replace('/registration');
            // window.location.pathname = '/registration'
        } else {
            let stateObj = {id: "100"};
            window.history.replaceState(stateObj, "Reg", "/login");
            // window.location.replace('/login');
            // window.location.pathname = '/login'
        }
    });
});
