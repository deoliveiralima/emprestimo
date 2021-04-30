<template>
<div>
  <div class="container">
    <div class="row">
      <model-list-select :list="itens"
          option-value="id"
          option-text="nome"
          v-model="item"
          placeholder="Escolha o Item">
      </model-list-select>
    </div>
    <div class="row mt-2">
      <model-list-select :list="solicitantes"
          option-value="id"
          option-text="nome"
          v-model="solicitante"
          placeholder="Escolha o Item">
      </model-list-select>
    </div>
  </div>
        <!-- object value -->
        
</div>
</template>
 
<script>
  import { ModelListSelect } from 'vue-search-select'

   console.log("antes");
   var itens = null;

   

   console.log("depois");
   
  export default {
    mounted(){
      this.obterItens();
      this.obterSolicitantes();
      
    },
    
    
    data () {
      
      
      
      return {
        solicitantes: [],
        solicitante: '',
        itens: [],
        item : '',
      }
    },
  
    methods: {
      obterItens(){
        axios.get('buscaitens')
      .then( response => (this.itens = response.data.itens))
      },
      obterSolicitantes(){
        axios.get('buscasolicitantes')
      .then( response => (this.solicitantes = response.data.solicitantes))
      },

      reset () {
        this.item = {},
        this.solicitantes = {} 
      },
      selectFromParentComponent1 () {
        // select option from parent component
        this.item = this.options[0]
        this.solicitante = this.solicitante[0]
        console.log(this.item);
      },
  

    },
    components: {
      ModelListSelect
    },
    
  }



</script> 