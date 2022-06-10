<template>
    <div class="row justify-content-center">
        <div class="card-header">Edit Product</div>
        <div class="card-body">
            <form @submit.prevent="updateProduct">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" v-model="product.code"></input>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" v-model="product.name"></input>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" v-model="product.description"></textarea>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-primary">Save</button>
                    <router-link :to="{name: 'products'}" class="btn btn-secondary">Back</router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            product:{}
        }
    },

    created() {
        this.getData();
    },

    methods: {

        getData() {
            let uri = `/api/products/${this.$route.params.id}`;
            this.axios.get(uri)
                .then(response => {
                    this.product = response.data;
                });
        },

        updateProduct() {
            let uri = `/api/products/${this.$route.params.id}`;
            this.axios.put(uri, this.product)
                .then(response => {
                    this.$router.push({name: 'products'});
                });
        }
    }
}
</script>