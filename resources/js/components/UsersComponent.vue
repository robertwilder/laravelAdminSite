<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Table</div>

                    <div class="card-body">
                    <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">User Email</th>
                                
                                </tr>
                            </thead>
                            <tbody v-for="(user, index) in users" :key="user.user">
                                <tr>
                                <th scope="row">{{index + 1}}</th>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        data(){
            return {

                users: []

            }

        },
       
       methods: {
           loadUsers(){
               axios.get("api/users").then((response) => {
                   this.users = response.data
                   console.log(this.users)
                        }
           
                     )}
                },
        created(){
        this.loadUsers()
      }

    }

</script>