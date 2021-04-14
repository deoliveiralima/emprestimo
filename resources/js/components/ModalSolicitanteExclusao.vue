<template>
   <div>

        <button id="btnModal" class="btn btn-danger" data-toggle="modal" @click="ativaModal" > Excluir </button>
        
   </div>
</template>

<script>

    export default {
        props:['solicitanteId', 'solicitanteNome'],
        mounted() {
            console.log('') 
        }, 


        methods:{
            ativaModal(){
                $('#formExclusaoSolicitante').attr('action', '/solicitante/' + this.solicitanteId);
                $("#nomeSolicitante").text(this.solicitanteNome);
                $('#modalConfirmaExclusaoSolicitante').modal('show')
            }

        }
    }

    

</script>
