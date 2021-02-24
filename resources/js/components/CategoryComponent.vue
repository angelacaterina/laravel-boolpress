<template>
    <aside class="col-md-4">
        <h1>Categories</h1>
        <ul>
            <li v-for="category in categories">
                {{category.genre}}
            </li>
        </ul>
    </aside>
</template>

<script>
    export default {
        data(){
            return {
                categories:""
            }
        },

        mounted() {
            console.log('Component mounted.')
            axios.get('api/categories').then(resp => {
                console.log(resp.data.response);
                this.categories = resp.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>