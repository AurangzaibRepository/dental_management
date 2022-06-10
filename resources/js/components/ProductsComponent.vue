<template>
    <div class="row">
        <div class="card-header">Products</div>
        <div class="card-body">

            <router-link :to="{name: 'create-product'}" class="btn btn-primary">Add New</router-link>
            <br/>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Actions</th>
                </tr>   
                </thead>
                <tbody>
                    <tr v-for="product in productList" :key="product.id">
                        <td>{{ product.id }}</td>
                        <td>{{ product.code }}</td>
                        <td>{{ product.name }}</td>
                        <td>{{ product.description }}</td>
                        <td>
                            <router-link :to="{name: 'update-product', params:{id: product.id}}" class="btn btn-primary">Edit</router-link>
                            <button class="btn btn-danger" @click.prevent="deleteProduct(product.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                productList: []
            }
        },

        created() {
            this.getListing();
        },

        methods: {

            getListing() {
                let uri = '/api/products';
                this.axios.get(uri)
                    .then(response => {
                        this.productList = response.data;
                    });
            },

            deleteProduct(id) {
                let uri = `/api/products/${id}`;
                this.axios.delete(uri)
                    .then(response => {
                        this.getListing();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
</script>