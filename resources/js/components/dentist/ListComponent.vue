<template>
    <label class="page-title">Dentists</label>

    
</template>

<script>
import JlDatatble from 'jl-datatable';

export default {
    component: {
        JlDatatble
    },

    data() {
        return {
            datatable: {
                url: '/api/dentists/listing'
            }
        }
    }
}
</script>