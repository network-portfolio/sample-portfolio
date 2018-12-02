<template>
    <div class="max-w-xl flex flex-col center-items mb-16 shadow-lg">
        <div class="flex justify-center bg-primary1 p-2 pb-3 font-black rounded-t text-white">
            {{ project.name }}
        </div>
            <img class="cursor-pointer w-full" :src="project.images[0].url" height= "auto">
        <div class="bg-primary2 p-4">
            <div class="mb-2">
                {{ project.description }}
            </div>                        
        </div>
        <div class="flex pl-4 mb-2 justify-center">
            <a v-for="projectMember in project.project_members"
                target="_blank"
                :key="projectMember.user.id"
                :href="projectMember.user.portfolio_url"
            >
                <img class="cursor-pointer rounded-full h-10 w-10 mr-1"
                    :src="projectMember.user.avatar_url"
                    :title="projectMember.user.name">
            </a>
        </div>        
    </div>
</template>

<script>
    export default {
        props: ['project']
    }

</script>
