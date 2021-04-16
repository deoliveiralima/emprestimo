<template>
   <div>

        <form>
            <div class="form-group row">
              <label for="" class="col-sm-2 form-control-label">Country</label>
              <div class="col-sm-10">
                <select class="form-control selectpicker" id="select-country" data-live-search="true">
                    <option data-tokens="china">China</option>
                    <option data-tokens="malayasia">Malayasia</option>
                    <option data-tokens="singapore">Singapore</option>
                </select>

            </div>
            </div>
          </form>
        
   </div>
</template>

<script>

$(function() {
  $('.selectpicker').selectpicker();
});

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
