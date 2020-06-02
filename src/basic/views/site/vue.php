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
    <div id="app">
        <h1>{{ message }}</h1>
        <hr>
        <input v-bind:placeholder="hint">
        <hr>
        <button @click="mostrar = !mostrar"> {{mostrar?'Ocultar':'Mostrar'}}</button>
        <span v-if="mostrar">Este texto se puede ocultar</span>
        <hr>
        <ul>
            <li v-for="musico in musicos">{{ musico.nombre }}</li>
        </ul>
        
    </div>

    <script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue',
            hint: 'Ingrese su nombre',
            mostrar: false,
            musicos: [
                {nombre: 'Sting', discos: 0},
                {nombre: 'U2', discos: 0},
                {nombre: 'Pink Floyd', discos: 0},
                {nombre: 'The Beatles', discos: 0},
            ]
        },
        
    })
</script>
    
</div>
