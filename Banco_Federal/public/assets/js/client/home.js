const HomeApp = (function(){
    const loader = {
        saldo_component : () => {
            const request = httpRequest(base_url + '/home/saldo', 'GET', {});
        },
    }

    const events = {

    }



    return {
        init : () => {
            loader.saldo_component();
        }
    }
})();

$(document).ready(function () {
    HomeApp.init();
});