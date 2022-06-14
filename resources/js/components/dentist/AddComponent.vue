<template>
    <div>
        <label class="page-title">Dentists - Add</label>

        <div class="dv-section">
          <form @submit.prevent="addDentist">

                <p v-if="errors.length">
                    <ul>
                        <li v-for="error in errors">{{error}}</li>
                    </ul>
                </p>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" v-model="dentist.first_name"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" v-model="dentist.last_name"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="dentist.email"></input>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Subscription</label>
                        <select class="form-select" v-model="dentist.subscription">
                            <option v-for="option in subscriptionOptions" :value="option.value">{{option.text}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <select class="form-select" v-model="dentist.active">
                            <option v-for="option in statusOptions" :value="option.value">{{option.text}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" v-model="dentist.password"></input>
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
            ],
            errors: [],
            dentist: {}
        }
    },

    methods: {
        addDentist() {

            let isValid = this.validateForm();

            if (!isValid) {
                return false;
            }

            let uri = '/api/dentists';
            axios
                .post(uri, this.dentist)
                .then(response => {

                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>