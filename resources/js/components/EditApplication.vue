<template>
    <div>
        <h3 class="text-center">Edit Application</h3>
        <form @submit.prevent="updateApplication">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>User ID</label>
                        <input type="text" class="form-control" v-model="application.user_id">
                    </div>
                    <div class="form-group">
                        <label>role_current_id</label>
                        <input type="text" class="form-control" v-model="application.role_current_id">
                    </div>
                    <div class="form-group">
                        <label>role_request_id</label>
                        <input type="text" class="form-control" v-model="application.role_request_id">
                    </div>
                    <div class="form-group">
                        <label>category_current</label>
                        <input type="text" class="form-control" v-model="application.category_current">
                    </div>
                    <div class="form-group">
                        <label>expired_at</label>
                        <input type="text" class="form-control" v-model="application.expired_at">
                    </div>
                    <div class="form-group">
                        <label>order_info</label>
                        <input type="text" class="form-control" v-model="application.order_info">
                    </div>
                    <div class="form-group">
                        <label>order_date</label>
                        <input type="text" class="form-control" v-model="application.order_date">
                    </div>
                    <div class="form-group">
                        <label>experience_total</label>
                        <input type="text" class="form-control" v-model="application.experience_total">
                    </div>
                    <div class="form-group">
                        <label>experience_role</label>
                        <input type="text" class="form-control" v-model="application.experience_role">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>experience_org</label>
                        <input type="text" class="form-control" v-model="application.experience_org">
                    </div>
                    <div class="form-group">
                        <label>category_request</label>
                        <input type="text" class="form-control" v-model="application.category_request">
                    </div>
                    <div class="form-group">
                        <label>agreement_procedure</label>
                        <input type="text" class="form-control" v-model="application.agreement_procedure">
                    </div>
                    <div class="form-group">
                        <label>agreement_personal_data</label>
                        <input type="text" class="form-control" v-model="application.agreement_personal_data">
                    </div>
                    <div class="form-group">
                        <label>given_at</label>
                        <input type="text" class="form-control" v-model="application.given_at">
                    </div>
                    <div class="form-group">
                        <label>error</label>
                        <input type="text" class="form-control" v-model="application.error">
                    </div>
                    <div class="form-group">
                        <label>accepted_at</label>
                        <input type="text" class="form-control" v-model="application.accepted_at">
                    </div>
                    <div class="form-group">
                        <label>uploaded_at</label>
                        <input type="text" class="form-control" v-model="application.uploaded_at">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                application: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/applications/${this.$route.params.id}`)
                .then((res) => {
                    this.application = res.data;
                });
        },
        methods: {
            updateApplication() {
                this.axios
                    .patch(`http://localhost:8000/api/applications/${this.$route.params.id}`, this.application)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
