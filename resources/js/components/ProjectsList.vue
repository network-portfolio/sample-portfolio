<template>
    <div class="flex flex-col">
        <!--<h1 class="self-center mb-8 font-sans">projects</h1>-->
        <project-card v-for="project in projects" :key="project.name" :project="project">
        </project-card>

        <h1 v-if="message">
            {{ message }}
        </h1>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                projects: [],
                message: ''
            }
        },

        mounted() {
            fetch(env.api + 'users/' + env.user_id + '/projects').then(data => {
                
                if(data.status == 404) {
                    this.message = "No projects found. Make sure to register on the hub, then specify your user id in the env file."
                    return;
                }

                data.json().then(projects => {
                    this.projects = projects
                    
                })
            })
        }
    }
</script>
