<template>
    <div>
        <div v-if="success" class="alert alert-danger">
            {{success}}
        </div>

        <div v-if="errors.length" class="alert alert-danger">
            <ul>
                <li v-for="error in errors">{{error}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        errors: {
            type: Array,
            default: function () {
                return []
            }
        },
        success: {
            type: String,
            default: ''
        }
    }
}
</script>