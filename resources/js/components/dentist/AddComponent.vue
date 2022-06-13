<template>
    <div>
        <label class="page-title">Dentists - Add</label>

        <div class="dv-section">
          <form @submit.prevent="addDentist">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" v-model="first_name"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Last Name</label>
                        <input type="text"  class="form-control" v-model="last_name"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="email"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Subscription</label>
                        <select class="form-select" v-model="subscription">
                            <option v-for="option in subscriptionOptions" :value="option.value">{{option.text}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <select class="form-select" v-model="active">
                            <option v-for="option in statusOptions" :value="option.value">{{option.text}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" v-model="password"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button class="btn btn-primary">Save</button>
                        <router-link to="/dentists" class="btn btn-secondary">Cancel</router-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            statusOptions: [
                {text: 'Active', value: '1'},
                {text: 'Inactive', value: '0'}
            ],
            subscriptionOptions: [
                {text: 'Free', value: 'Free'},
                {text: 'Premium', value: 'Premium'}
            ]
        }
    }
}
</script>