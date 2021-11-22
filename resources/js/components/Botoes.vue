<template>
    <a class="btn btn-secondary" v-bind:href="url" > {{nome}}</a>
</template>

<script>
    export default {
    props:['url','nome']
    }
</script>
