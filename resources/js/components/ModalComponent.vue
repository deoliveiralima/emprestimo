<template>
   <div>

        <button id="btnModal" class="btn btn-primary" data-toggle="modal" @click="ativaModal" > Excluir </button>
        
   </div>
</template>

<script>

    export default {
        props:['itemId', 'itemNome'],
        mounted() {
            console.log('') 
        }, 


        methods:{
            ativaModal(){
                $('#formExclusaoItem').attr('action', '/item/' + this.itemId);
                $("#nomeItem").text(this.itemNome);
                $('#modalConfirmaExclusao').modal('show')
            }

        }
    }

    

</script>
