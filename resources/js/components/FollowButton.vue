<template>
    <div>
        <button class="btn btn-primary" @click="followUser" >Follow Me</button>
    </div>

</template>

<script>
    export default {
        props: ['user-id'],

        mounted() {
            console.log('Component follow-button mounted.')
        },

        methods: {
            followUser() {
                // console.log('follow clicked');

                axios.post('/follow/' + this.userId)
                    .then(response => {
                        alert(JSON.stringify( response.data) )
                    });
            }
        }
    }
</script>
