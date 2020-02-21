<template>
  <table class="table table-striped" id="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="product in productos">
        <th scope="row">{{product.id}}</th>
        <td>{{product.Nombre}}</td>
        <td>{{product.Descripcion}}</td>
        <td>{{product.Precio}}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
// imports
    import datables from 'datatables'

export default {
  mounted() {
    this.getProducts()
  },
    data(){
        return {
            productos:[]
        }
    },

    methods: {
        getProducts(){
            var urlApi = '/api/products';

            axios.get(urlApi).then(response =>{
                this.productos=response.data;
                $(function () {
                $('#table').DataTable();
            });  
            } );
        },

        table(){
           
        }
    }
};
</script>
