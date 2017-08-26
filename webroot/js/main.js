/*ellipsis*/
(function($) {
    $.fn.ellipsis = function()
    {
        return this.each(function()
        {
            var el = $(this);

            if(el.css("overflow") == "hidden")
            {
                var text = el.html();
                var multiline = el.hasClass('multiline');
                var t = $(this.cloneNode(true))
                    .hide()
                    .css('position', 'absolute')
                    .css('overflow', 'visible')
                    .width(multiline ? el.width() : 'auto')
                    .height(multiline ? 'auto' : el.height())
                    ;

                el.after(t);

                function height() { return t.height() > el.height(); };
                function width() { return t.width() > el.width(); };

                var func = multiline ? height : width;

                while (text.length > 0 && func())
                {
                    text = text.substr(0, text.length - 1);
                    t.html(text + "...");
                }

                el.html(t.html());
                t.remove();
            }
        });
    };
})(jQuery);

  /* script de horarios y dias */
var d = new Date();
var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
var n = weekday[d.getDay()];
var daysOfTheWeek = document.getElementsByTagName("li");
dayOfTheWeek(daysOfTheWeek);
function dayOfTheWeek (weekDays) {
    for(var i = 0; i < weekDays.length; i++)
  { 
    if(weekDays[i].getAttribute("name") == n)
    {
        weekDays[i].className = 'active';
      weekDays[i].childNodes[0].className = 'active';
    }
  }
}

/*share producto*/
function shareProd (id){
  FB.ui({
  method: 'share',
  href: 'http://paseociudad.website/productos/ver/'+id,
}, function(response){
});
}

/*modal de home - buscar - perfil*/

//variable de link del producto clickeado


  function pmodal(elem, e){
$('#caru  > .item').addClass('active');
    var id = $(elem).attr('pid');
        nNombre = $('#pid' + id + ' > li:nth-child(1)').text();
        pTitulo = $('#pid' + id + ' > li:nth-child(2)').text();
        pPrecio = $('#pid' + id + ' > li:nth-child(3)').text();
        pCuerpo = $('#pid' + id + ' > li:nth-child(4)').text();
        pImagen = $('#pid' + id + ' > li:nth-child(5)').text();
        pId = $('#pid' + id + ' > li:nth-child(6)').text();
        pIdShare = $('#pid' + id + ' > li:nth-child(7)').text();
        numImagen = $('#pid' + id + ' > ul > li:first-child').text();

       /*cambia de hovera tap en responsive*/
      if (window.innerWidth < 992) {
			$('#modalProduct').on('show.bs.modal', function (e) { 
				e.preventDefault();
			});
	        //enviar al producto clickeado en pantalla menor a 992px, cambiar reaload por funcion de redirijir
	        window.location = '../../../productos/ver/'+ pIdShare;
 
      } else {
$("body").addClass("modal-open");
        //asigno los datos del producto al modal incluyendo la primer imagen
        $('#pTitulo').text(pTitulo);
        $('#pPrecio').text(pPrecio);
        $('#pCuerpo').text(pCuerpo);
        $('#caru > div > img').attr('src', pImagen);
        $('#carui > li > img').attr('src', pImagen);
        $('#l-name').text(nNombre);
        $('.vermasde > a').attr('href', '/negocios/perfil/'+pId);
        $('#vermash1').text(nNombre);
        $('#share-prod-fb').attr('onclick', 'shareProd('+pIdShare+');');
          //j es la posicion de la imagen, arranca del 3 porque el 1 es la cantidad de imagenes y el 2 es la primer imagen
         var j = 3;
         for ( var i = 1; i < numImagen; i++ ) {
          //agrega las imagenes que falta (elementos virtuales)
          allImagenes = $('#pid' + id + ' > ul > li:nth-child('+ j +')').text();

          $('#caru').append('<div class="item thumbnail dom">'+'<img src='+ allImagenes +' /></div>');
         
         $('#carui').append('<li data-target='+'#carousel-custom'+' class="dom" data-slide-to='+ i +'><img src='+ allImagenes +' /></li>');
         j = j + 1;
         } 
     }
    // console.log(numImagen )
    };

 

$(window).bind("load", function() {
$(".ellipsis").ellipsis();
});
