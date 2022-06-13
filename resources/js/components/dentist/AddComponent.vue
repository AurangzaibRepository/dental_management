<template>
    <div>
        <label class="page-title">Dentists - Add</label>
        <div class="dv-section">
            <div class="row dv-form">
                <div class="col-md-6 mb-3">
                    <label>First Name</label>
                    <input type="text" class="form-control"></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Last Name</label>
                    <input type="text"  class="form-control"></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Subscription</label>
                    <select class="form-select">
                        <option value="Free">Free</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select class="form-select">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control"></input>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary">Save</button>
                    <router-link to="/dentists" class="btn btn-secondary">Cancel</router-link>
                </div>
            </div>
        </div>
    </div>
</template