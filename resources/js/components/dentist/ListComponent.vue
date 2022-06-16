<template>
    <div>
        <label class="page-title">Dentists</label>
        <div class="alert alert-success" v-if="success">
            Profile saved successfully
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <router-link to="/dentists/add" class="btn btn-primary">Add New</router-link>
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    data() {
        return {
            success: '',
        }
    },

    mounted() {
        this.success = localStorage.getItem('success');
        localStorage.removeItem('success');
    }
}
</script>