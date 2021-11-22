<template>
    <div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <label>Id: {{item.ref}}</label><br>
                <label>Name: {{item.name}}</label><br>
                <label>Type 1: {{item.type_1}}</label><br>
                <label>Type 2: {{item.type_1}}</label><br>
                <label>Total: {{item.total}}</label><br>
                <label>HP: {{item.hp}}</label><br>
                <label>Attack: {{item.attack}}</label><br>
                <label>Defense: {{item.defense}}</label><br>
                <label>SP Atk: {{item.sp_atk}}</label><br>
                <label>SP Def: {{item.sp_def}}</label><br>
                <label>Speed: {{item.speed}}</label><br>
                <label>Generation: {{item.generation}}</label><br>
                <label>Legendary: {{item.legendary}}</label><br>
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['nome','item']
    }
</script>
