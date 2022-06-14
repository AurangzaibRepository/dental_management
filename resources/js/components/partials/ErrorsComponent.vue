<template>
    <div class="alert alert-danger">
        <ul>
            <li v-for="error in errors">{{error}}</li>
        </ul>
    </div>
</template>