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
      message: '',
      NombreEmpresa: 'Dental Sistem',
      SloganEmpresa: 'Pensando en su salud'
    },
    methods:{

    },
    computed: {

    }
  })
}
// app vue para login

// app list pacientes
if ($("#table-pacientes-list").length > 0) {

  var listPacientes = new Vue({
    el: "#table-pacientes-list",
    data:{
      pacientes:'',
      paginate: {
          'total' : 0,
          'current_page': 0,
          'per_page': 0,
          'last_page': 0,
          'from': 0,
          'to': 0
        },
      offset: 3,
      busqueda: ''
    },
    watch:{
      busqueda: function(){
        var that = this;
        if (this.busqueda == '') {
          this.getPacientes()
        }
        if (this.pacientes.length == 10) {
          axios.get('../get-pacientes?buscar='+this.busqueda)
              .then(function (response) {
               that.pacientes = response.data
               console.log('ejecuta');
               })
              .catch(function (error) {
                 console.log(error);
          });
        }else {
          $.each(this.pacientes, function(i, v) {
              if (v.nombre.search(new RegExp(/wend/i)) != -1) {
                  console.log(v.nombre+" - "+that.busqueda)
                  return;
              }
          });
        }
      }
    },
    computed:{
      isActived: function(){
        return this.paginate.current_page
      },
      pagesNumber: function(){
        if (!this.paginate.to) {
          return [];
        }
        var from = this.paginate.current_page - this.offset
        if (from < 1) {
          from = 1
        }
        var to = from + (this.offset * 2)
        if (to >= this.paginate.last_page) {
          to = this.paginate.last_page
        }
        var pagesArray = []
        while (from <= to) {
          pagesArray.push(from)
          from++
        }
        return pagesArray
      }
    },
    created: function(){
      this.getPacientes()
    },
    methods:{
      getPacientes: function(page){
        var that = this;
        axios.get('../get-pacientes?page='+page)
            .then(function (response) {
             that.pacientes = response.data.pacientes.data
             that.paginate = response.data.paginate
             })
            .catch(function (error) {
               console.log(error);
             });
      },
      changePage: function(page){
        this.paginate.current_page = page
        this.getPacientes(page)
      }
    }
  })

}
// app list pacientes

// app vue para el nav del dashboard

// app vue para el nav del dashboard
