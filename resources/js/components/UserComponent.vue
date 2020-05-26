<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <h2>hello  {{user.name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props : ['user'],
        
        data(){


        },

        

    //    methods: {
    //        loadUsers(){
    //            axios.get("api/user").then((response) => {
    //                this.user = response.data
    //                console.log(this.users)
    //                     }
           
    //                  )}
    //             },
    // //     created(){
    // //     this.loadUsers()
    //   }

    }

</script>