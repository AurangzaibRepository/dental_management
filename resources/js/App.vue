<template>
    <div class="dv-base">
        <div class="dv-navbar">
            <span class="spn-app-title">DENTALINK</span>
        </div>
        <div class="dv-layout">
            <LeftMenuComponent />
            <div class="dv-content">
                <router-view></router-view>
            </div>
        </div>    
    </div>
</template>

<script>
import LeftMenuComponent from './components/partials/LeftMenuComponent';

export default {
    components: {
        LeftMenuComponent
    }   
}
</script>

<style scoped>

    .dv-base {
        height: 100%;
    }

    .dv-navbar {
        align-items: center;
        background-color: #5b54b7;
        display: flex;
        height: 7%;
        padding: 10px 15px;
    }

    .spn-app-title {
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px
    }

    .dv-layout {
        display: flex;
        height: 93%
    }

    .dv-content {
        padding: 30px;
        width: 86%
    }
</style>