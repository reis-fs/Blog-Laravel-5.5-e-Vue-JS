<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>
        
        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
            defineCor: function() {
                return "panel "+ (this.cor || "panel-default");
            }
        }
    }
</script>
<style>
    .blue {
        border-color: #0E99DA;
    }
    .blue > .panel-heading {
        color: #fff;
        background-color: #0E99DA;
        border-color: #0E99DA;
    }

    .electric-crimson {
        border-color: #FF003F;
    }
    .electric-crimson > .panel-heading {
        color: #fff;
        background-color: #FF003F;
        border-color: #FF003F;
    }

    .purple {
        border-color: #C000FF;
    }
    .purple > .panel-heading {
        color: #fff;
        background-color: #C000FF;
        border-color: #C000FF;
    }
</style>

