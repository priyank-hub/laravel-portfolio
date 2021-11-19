<template>
    <div>
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 p-3 head">
                        <h4 class="text-muted">
                            <i class="fas fa-code-branch mx-2"></i>
                            My Projects
                        </h4>
                    </div>
                    <div class="col-12 col-md-4 p-3 button">
                        <b-button :href="route('admin.projects.create')" class="text-white border-0 p-2 px-4" 
                            style="background-color: rgba(47,54,95)">
                            <i class="fas fa-plus mx-2" />
                            Create Project
                        </b-button>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="" style="overflow: auto">
                                <table class="table table-striped table-bordered bg-white">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Tech</th>
                                            <th>Image</th>
                                            <th>Repository</th>
                                            <th>Preview</th>
                                            <th>Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(project, key) in projects" :key="key" style="font-size: 13px">
                                            <td>{{ project.name }}</td>
                                            <td>
                                                <ul class="p-0">
                                                    <li v-for="(desc, key) in descriptions[project.id]" :key="key" style="list-style-type: none">
                                                        <span v-if="desc.length > 10">
                                                            {{ desc.substring(0,10) }}...
                                                        </span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>   
                                                <ul class="px-2">
                                                    <li v-for="tech in project.technologies" :key="tech.id">
                                                        {{ tech.name }}
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img :src="`/storage/${project.image_path}`" alt="" width="100%">
                                            </td>
                                            <td>
                                                <!-- {{ project.repo_path }} -->
                                                <span v-if="project.repo_path.length > 20">
                                                    {{ project.repo_path.substring(0,20) }}...
                                                </span>
                                                <span v-else>
                                                    {{ project.repo_path }}
                                                </span>
                                            </td>
                                            <td>
                                                <div v-if="project.live_path">
                                                    <span v-if="project.live_path.length > 20">
                                                        {{ project.live_path.substring(0,20) }}...
                                                    </span>
                                                    <span v-else>
                                                        {{ project.live_path }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                {{ project.note }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../../Shared/AdminLayout.vue'
export default {
    name: 'Projects',
    components: {
        AdminLayout,
    },
    data() {
        return {
            descriptions: [],
            index: 0,
        }
    },
    props: {
        user: Object,
        projects: Array,
    },
    mounted() {
        this.projects.forEach(project => {
            let arr = project.description.split('.');
            this.descriptions[project.id] = arr;
            this.index += 1;
        });
    },
    methods: {

    }
}
</script>
<style scoped>
.head {
    text-align: left
}

.button {
    text-align: right;
}

@media (max-width: 992px) {
    .head {
        text-align: center;
    }

    .button {
        text-align: center;
    }
}

ul li {
    margin-top: 10px;
}
</style>
