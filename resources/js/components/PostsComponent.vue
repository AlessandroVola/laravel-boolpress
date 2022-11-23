<template>
    <div>
        <div v-if="loading">
            CARICAMENTO IN CORSO
        </div>
        <div v-else-if="posts.length > 0">
            <div v-for="post in posts" :key="post.id">
                {{ post.title }}
            </div>
        </div>
        <div v-else>
            NESSUN POST DA VISUALIZZARE
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostsComponent',
    data() {
        return {
            posts: [],
            errorMessage: '',
            loading: true
        }

    },
    mounted() {
        console.log('PostsComponent exists');

        axios.get('/api/posts').then(({ data }) => {
            if (data.success) {
                this.posts = data.results;
            } else {
                $this.errorMessage = data.error;
            }
            this.loading = false;
        })




    }
}
</script>

<style lang="scss" scoped>

</style>