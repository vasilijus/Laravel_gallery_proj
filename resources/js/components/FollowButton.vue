<template>
    <div>
        <button class="btn btn-primary" @click="followUser" >Follow Me</button>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component follow-button mounted.')
        },

        methods: {
            followUser() {
                // console.log('follow clicked');

                axios.post('/follow/1')
                    .then(response => {
                        alert(response.data)
                    });
            }
        }
    }
</script>
