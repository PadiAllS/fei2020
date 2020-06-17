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
)

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
        
        
    </div>

    <script>
    var app = new Vue({
        el: '#app',
        data: {
            tipotexto: 'text-info',
            es_info: true,
        },
        methods: {
            

        },
        computed: {
            
        },
        beforeCreate(){
            console.log("beforeCreate")
        },
        created(){
            console.log("created")
        },
        beforeMount(){
            console.log("beforeMount")
        },
        mounted(){
            console.log("mounted")
        },
        beforeUpdate(){
            console.log("feforeUpdate")
        },
        updated(){
            console.log("updated")

        },
        berforeDestroy(){
            console.log("beforedestroy")

        },
        destroyed(){
            console.log("destroyed")

        }
    })
</script>
    
</div>
