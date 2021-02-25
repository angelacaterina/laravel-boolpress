<template>
    
            <div class="col-md-8">
                <div class="card" v-for="article in articles" >
                    <div class="card-header">
                        <div>
                            Title: {{ article.title }}
                        </div>
                        <div>
                            Subtitle: {{ article.subtitle }}
                        </div>
                    </div>

                    <div class="card-body">
                        {{ article.body }}
                    </div>

                    <div class="card-footer">
                        <div>
                            Author: {{ article.author }}
                        </div>
                        <div>
                            Category: {{ article.category_id }}
                        </div>
                    </div>
                </div>
            </div>
      
</template>

<script>
    export default {
        data(){
            return {
                articles:"",
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

            axios.get('api/articles').then(resp => {
                console.log(resp.data.response);
                this.articles = resp.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 20px 0;
    }

</style>