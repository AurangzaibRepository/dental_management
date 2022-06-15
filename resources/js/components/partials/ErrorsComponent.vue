<template>
    <div v-if="errors.length" class="alert alert-danger">
        <ul>
            <li v-for="error in errors">{{error}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        errors: Array
    }
}
</script>