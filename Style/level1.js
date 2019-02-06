$(document).ready(function () {

    function get_cookie ( cookie_name )
    {
        var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

        if ( results )
            return ( unescape ( results[2] ) );
        else
            return null;
    }

    if (get_cookie('error1')) {
        $("#prom1").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });
        $("#prom2").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error2')) {

        $("#prom2").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });
        $("#prom3").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error3')) {

        $("#prom3").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });
        $("#prom4").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error4')) {

        $("#prom4").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom5").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error5')) {

        $("#prom5").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });
        $("#prom6").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error6')) {

        $("#prom6").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom7").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error7')) {

        $("#prom7").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom8").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }



    if (get_cookie('error8')) {

        $("#prom8").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom9").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error9')) {

        $("#prom9").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom10").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error10')) {

        $("#prom10").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom11").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error11')) {

        $("#prom11").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom12").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error12')) {

        $("#prom12").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom13").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error13')) {

        $("#prom13").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom14").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error14')) {

        $("#prom14").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom15").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }


    if (get_cookie('error15')) {

        $("#prom15").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom16").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error16')) {

        $("#prom16").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom17").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error17')) {

        $("#prom17").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom18").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error18')) {

        $("#prom18").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom19").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

    if (get_cookie('error19')) {

        $("#prom19").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom20").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error20')) {

        $("#prom20").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom21").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error21')) {

        $("#prom21").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom22").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error22')) {

        $("#prom22").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom23").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error23')) {

        $("#prom23").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom24").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error24')) {

        $("#prom24").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom25").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error25')) {

        $("#prom25").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom26").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error26')) {

        $("#prom26").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom27").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error27')) {

        $("#prom27").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom28").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error28')) {

        $("#prom28").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom29").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error29')) {

        $("#prom29").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });

        $("#prom30").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }
    if (get_cookie('error30')) {

        $("#prom30").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'green',
            'color': '#afd9ee'
        });
        $("#prom31").css({
            'pointer-events': 'auto',
            'cursor': 'pointer',
            'background-color': 'orange',
            'color': '#afd9ee'
        });
    }

if (get_cookie('error31')) {
    $("#prom31").css({
        'pointer-events': 'auto',
        'cursor': 'pointer',
        'background-color': 'green',
        'color': '#afd9ee'
    });

}
});



