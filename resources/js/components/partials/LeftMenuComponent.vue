<template>
    <div class="dv-leftmenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Dashboard</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/dentists" class="nav-link">Dentists</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/tachnicians" class="nav-link">Techicians</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/patients" class="nav-link">Patients</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/cases" class="nav-link">Cases</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/settings" class="nav-link">Settings</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/logout" class="nav-link">Logout</router-link>
                </li>
            </ul>
    </div>
</template>

<style scoped>
    
    .dv-leftmenu {
        background-color: #efefef;
        box-shadow: 6px 0 5px -2px #bfbfbf;
        width: 14%
    }

    ul.navbar-nav {
        margin-top: 20px
    }

    .nav-link {
         border-bottom: 1px solid #5b54b7;
         color: #5b54b7;
         padding: 10px 15px;
    }

    .nav-link:hover, .nav-link:focus {
        background-color: #ada9db;
        border-color: #ada9db;
        color: white;
    }

</style>