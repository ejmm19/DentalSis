$(window).on('load', function() { // makes sure the whole site is loaded
  $("#preloader").fadeOut()
  $("#content-form-log").fadeIn(1500);
})
// Calcular el alto de la ventana
var ventana_alto = $(window).height();
$("#container-content").css('height', ventana_alto-70);
$("#container-content .row-int").css('height', ventana_alto-70);
// Calcular el alto de la ventana

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// app vue para login
if ($("#content-form-log").length > 0) {
  var app = new Vue({
    el: '#content-form-log',
    data: {
      message: ''
    },
    methods:{

    },
    computed: {
      NombreEmpresa: function () {
        return 'Dental Sis'
      },
      SloganEmpresa: function () {
        return 'Pensando en su salud'
      }
    }
  })
}
// app vue para login

// app vue para el nav del dashboard
if ($("#nav-dashboard").length > 0) {
  var nav = new Vue({
    el: '#nav-dashboard',
    data: {
      dato:'dat'
    },
    methods:{

    },
    computed: {
      InfoEmpresa: function () {
        // axios.get('get-empresa')
        //      .then(function (response) {
        //        $("#logo-empresa").attr('src', response.data[0].imagen)
        //        $("#nombreempresa").append(response.data[0].nombre)
        //       })
        //      .catch(function (error) {
        //         console.log(error);
        //       });
      }
    }
  })
}
// app vue para el nav del dashboard
