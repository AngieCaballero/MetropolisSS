$(function () {

    const _DOM = {
        Pagina: null,
        Conten: null,
        Pag: null,
        Nav: null
    }

    const cacheDOM = () => {
        _DOM.Pagina = $(document);
        _DOM.Conten = $('#contPrin');
        _DOM.Pag = $(window);
        _DOM.Nav = $('#navM')
    }

    const ManejadorEventos = () => {
        _DOM.Pagina.ready(function () {

            var fondoActual = 1;

            function RotarImagen() {

                _DOM.Conten.removeClass('contenedor' + fondoActual);
                if (fondoActual == 5) {
                    fondoActual = 0;
                }
                var sigfondo = fondoActual + 1;
                _DOM.Conten.addClass('contenedor' + sigfondo);
                fondoActual++;

            }
            setInterval(RotarImagen, 5000);

            var previousScroll = 0;

            _DOM.Pag.on(function(event) {
                var scroll_ = _DOM.Pag.scrollTop();

                if (scroll_ > previousScroll && scroll_ > 200){
                    
                    _DOM.Nav.addClass('bg-ScrollBaja');

                } 
                else 
                {
                   
                    _DOM.Nav.removeClass('bg-ScrollBaja');

                }
                previousScroll = scroll;    
            
            });
        });

        /*_DOM.btnSC.on("click", function(){
            $(document.body).load('/spanishclasses');
        });*/

        /*_DOM.btnTT.on("click", function(){
            $(document.body).load('/tourstransport');
        });*/

        $(window).on("scroll", function () {

        });

    }

    const init = async () => {
        cacheDOM();
        ManejadorEventos();
    }

    init();
});



