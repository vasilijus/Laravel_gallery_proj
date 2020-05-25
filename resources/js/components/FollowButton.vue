<template>
    <div>
        <button class="btn btn-primary" @click="followUser" v-text="buttonText" ></button>
    </div>

</template>

<script>
    export default {
        props: ['user-id', 'follows'],

        mounted() {
            console.log('Component follow-button mounted.')
        },

        data: function () {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser() {
                // console.log('follow clicked');

                axios.post('/follow/' + this.userId)
                    .then(response => {
                        console.log( response.data );
                        // alert(JSON.stringify( response.data) )

                        this.status = !this.status;

                    })
                    .catch(errors => {
                        if(errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            }
        },

         computed: {
             buttonText() {
                // alert( this.status);
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }

    }
</script>
