<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
            <painel titulo="Pokemons">
                <div class="row">
                    <div class="form-group col-6">
                        <input type="search" class="form-control" placeholder="Buscar: Id | Name" v-model="filters.search" v-debounce:300ms="index">
                    </div>
                </div>
                <tabela-lista :linhas="items">  
                </tabela-lista>
                <div class="text-center" style="font-size:25px;padding-left:20px">
                    <pagination :pagination="pagination" :callback="index"></pagination>
                </div>
            </painel>
            </div>
        </div>
    </div>
</template>

<script>
import pagination from 'vue-bootstrap-pagination';
import axios from 'axios';
    export default {
        components:{
            pagination
        },
        mounted(){
            this.index();
        },
        data(){
            return {
                items:[],
                filters:{
                    page:1,
                    search:'',
                    order:{
                        col:'ref',
                        dir:'asc'
                    }
                },
                pagination: {
                total: 0,
                per_page: 12,
                current_page: 1, 
                last_page: 0,    
                from: 1,
                to: 12
                }
            }
        },
        methods:{
            index(){
                this.filters.page = this.pagination.current_page;
                console.log(this.filters);
                axios.get('/api/pokemons2', {
                    params: this.filters
                }).then(res => {
                    this.items = res.data.data;
                    this.pagination.total = res.data.total;
                    this.pagination.per_page = res.data.per_page;
                    this.pagination.current_page = res.data.current_page;
                    this.pagination.last_page = res.data.last_page;
                    this.pagination.from = res.data.from;
                    this.pagination.to = res.data.to;  
                });
            }
        }
    }
</script>
