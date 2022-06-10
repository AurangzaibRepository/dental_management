<template>
    <div class="row justify-content-center">
        <div class="card-header">Add Product</div>
        <div class="card-body">
            <form @submit.prevent="addProduct">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" v-model="product.code"></input>
                        <span>{{error_code}}</span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" v-model="product.name"></input>
                    </div>
                    <div class="col-md-6 fomr-group">
                        <label>Product Description</label>
                        <textarea class="form-control" v-model="product.description"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product:{
                    code: ''
                },
                error_code: '',
                error_name: '',
                error_desc: ''
            }
        },

        methods: {
            addProduct() {

                if (this.product.code === '') {
                    this.error_code = 'Product code required';
                    return;
                }

                let uri = "/api/products";
                this.axios.post(uri, this.product)
                    .then(response => {
                        this.$router.push({name: 'products'});
                    })
                    .catch(error => {
                        console.log('Error');
                    });
            }
        }
    }
</script>