<template>
    <div>
        <h2 class="text-center">Applications List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Заявление загружено</th>
                <th>Требуется дополнения</th>
                <th>Заявление принято</th>
                <th>Портфолио загружено</th>
                <th>Требуется дополнения</th>
                <th>Заключение</th>
                <th>Приказ</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="application in applications" :key="application.id">
                <td>{{ application.id }}</td>
                <td>{{ application.given_at }}</td>
                <td>{{ application.error }}</td>
                <td>{{ application.accepted_at }}</td>
                <td> - </td>
                <td>{{ application.error }}</td>
                <td> - </td>
                <td> - </td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: application.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteApplication(application.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                applications: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/applications/')
                .then(response => {
                    this.applications = response.data;
                });
        },
        methods: {
            deleteApplication(id) {
                this.axios
                    .delete(`http://localhost:8000/api/applications/${id}`)
                    .then(response => {
                        let i = this.applications.map(data => data.id).indexOf(id);
                        this.applications.splice(i, 1)
                    });
            }
        }
    }
</script>
