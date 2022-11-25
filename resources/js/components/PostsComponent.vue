<template>
    <div>
        <div v-if="loading">
            CARICAMENTO IN CORSO
        </div>


        <PostListComponent v-else :posts="posts" @clickedPost="showPost" />
        <!-- <div v-else-if="posts.length > 0">
            <div v-for="post in posts" :key="post.id">
                <span @click="showPost(post.id)">{{ post.title }}</span>
            </div>
        </div>
        <div v-else>
            NESSUN POST DA VISUALIZZARE
        </div> -->
    </div>
</template>

<script>
import PostComponent from './PostComponent.vue';

import PostListComponent from './PostListComponent.vue';



export default {
    name: 'PostsComponent',
    components: {
        PostComponent,
        PostListComponent,
    },
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




    },
    methods: {
        showPost(id) {
            console.log(id);
            this.loading = true;
            axios.get('api/posts/' + id)
                .then(response => {
                    console.log(response);
                    this.loading = false;
                })
                .catch(e => {
                    console.log('errore', e);
                    this.loading = false;
                })
        }
    }

}
</script>

<style lang="scss" scoped>

</style>