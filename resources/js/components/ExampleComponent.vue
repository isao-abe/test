<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>name</th><th>email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="data in datalists">
                            <td>{{data.name}}</td>
                            <td>{{data.email}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["users"],
        data: function() {
            return {
                datalists:[],
            }
        },
        created() {
            this.datalists = this.users;
        },
        mounted() {
            console.log('Component mounted.');
            console.log(this.users);
        }
    }
</script>
