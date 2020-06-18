<?php

/* @var $this yii\web\View */

//use yii\base\View;
use yii\helpers\Html;
use yii\web\View;

$this->title = 'Vue';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    "https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
    ['position'=> View::POS_HEAD ]
);
$this->registerJsFile(
    "https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js",
    ['position'=> View::POS_HEAD ]
);

?>
<div class="site-vue">
    <div id="app" class='container mt-3'>
        <p :class="[tipotexto, 'bg-danger']">
            este es un texto del primer parrafo
        </p>
        <p :class="{'bg-info': !es_info, 'text-primary': es_info}">
            este es un texto del segundo parrafo
        </p>
        <button class="btn btn-primary" @click="es_info = !es_info">Change</button>
        
        <hr>

        <div class="form-group">
            <label for="cmbPermisos"> Permisos</label>
            <select class="form.control" id='cmbPermisos' v-model="permisos.selected"> 
                <option v-for="permiso in permisos.data" v-bind:value="permiso.id">
                    {{ permiso.descripcion }}
                </option>
            </select>
            <span>Seleccionado: {{ permisos.selected }}</span>
        </div>
        
    </div>

    <script>
    var app = new Vue({
        el: '#app',
        data: {
            tipotexto: 'text-info',
            es_info: true,
            permisos: {
                selected: 1,
                data: [
                    {
                        "descripcion": "invitado",
                        "id": 1,
                    },
                    {
                        "descripcion": "invitado2",
                        "id": 2,
                    }
                ]
            }
        },
        methods: {
            

        },
        computed: {
            
        },
        mounted(){
            console.log(axios);
            var that = this;
            axios.get('/apiv1/permiso')
                .then(function (response){
                    //handle success
                    console.log(response.data);
                    that.permisos.data = response.data
                    that.permisos.selected = response.data[1].id
                })
                .catch(function (error){
                    console.log(error);

                })
                .then(function(){
                    //always executed
                });
        },
    })
</script>

</div>
