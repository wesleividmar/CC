<template>
    <div>
        <table id="tblPokemons" class="table table-hover">
            <thead>
                <tr>
                    <th style="cursor:pointer;" v-on:click="ordenaColuna(0)">#</th>
                    <th style="cursor:pointer;" v-on:click="ordenaColuna(1)">Nome</th>
                    <th style="cursor:pointer;" v-on:click="ordenaColuna(4)">Total</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in lista" @click="showDetails(item)" style="cursor:pointer">
                    <td>{{item.ref}}</td>
                    <td>{{item.name}}</td>
                    <td>{{item.total}}</td>
                    <td><a href="#" @click="showDetails(item)">Detalhes</a></td>                   
                </tr>
            </tbody>
        </table>
            <modal nome="Detalhes" :item="this.item"></modal>
    </div>
</template>

<script>
    export default {
        props:['linhas','ordem','ordemCol'],
        data: function(){
            return{
               buscar:'',
               item:[],
               ordemAux: this.ordem || "asc",
               ordemAuxCol: this.ordemCol || 0
            }
        },
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit();
            },
            ordenaColuna: function(coluna){
                this.ordemAuxCol = coluna;
                if(this.ordemAux.toLowerCase() == "asc"){
                    this.ordemAux = "desc";
                }else{
                    this.ordemAux = "asc";
                }
            },
            showDetails(item){
                this.item = item;
                $('#Detalhes').modal('show')
            }
        },
        computed:{
            lista:function(){

                let ordem = this.ordemAux;
                let ordemCol = this.ordemAuxCol;
                ordem = ordem.toLowerCase();
                ordemCol = parseInt(ordemCol);

                if(ordem == "asc"){
                    this.linhas.sort(function(a,b){
                        if( Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ){return 1;}
                        if( Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ){return -1;}
                        return 0;
                    });
                } else {
                    this.linhas.sort(function(a,b){
                        if( Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ){return 1;}
                        if( Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ){return -1;}

                        return 0;
                    });
                }

                return this.linhas.filter(res => {
                    if(this.buscar){
                        for(let k = 0; k < res.length; k++){
                            if((res[k]+"").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                                return true;
                            }else{
                                return false;
                            }
                        }
                    }else{
                        return true;
                    }
                });
            }
        }
    }
</script>
