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
                        <tr>
                            <td></td>
                            <td></td>
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
        mounted() {
            console.log('Component mounted.');
            console.log(this.users);
        }
    }
</script>
