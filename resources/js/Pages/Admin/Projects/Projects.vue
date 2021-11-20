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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(project, key) in projects" :key="key" class="tr"
                                        style="font-size: 13px">
                                            <td>{{ project.name }}</td>
                                            <td>
                                                <ul class="p-0">
                                                    <li v-for="(desc, key) in descriptions[project.id]" :key="key" style="list-style-type: none">
                                                        <span v-if="desc.length > 10">
                                                            {{ desc.substring(0,10) }}...
                                                        </span>
                                                        <span v-else>
                                                            {{ desc }}
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
                                                <img v-if="project.image_path" :src="`/storage/${project.image_path}`" alt="" width="100%">
                                                <img v-else src="assets/works/no-preview.png" alt="" style="max-height: 150px" width="100%">
                                            </td>
                                            <td>
                                                <!-- {{ project.repo_path }} -->
                                                <span v-if="project.repo_path && project.repo_path.length > 20">
                                                    {{ project.repo_path.substring(0,20) }}...
                                                </span>
                                                <span v-else>
                                                    {{ project.repo_path }}
                                                </span>
                                            </td>
                                            <td>
                                                <div v-if="project.live_path && project.live_path">
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
                                            <td>
                                               <div class="d-flex flex-row">
                                                   <b-button class="col p-1 mx-2 border-0" style="background: transparent" :href="route('admin.projects.edit', project.id)">
                                                       <i class="fas fa-edit text-dark" />
                                                   </b-button>
                                                   <b-button class="col p-1 mx-2 border-0" style="background: transparent" @click="destroy(project.id)">
                                                       <i class="fas fa-trash text-dark"/>
                                                   </b-button>  
                                                </div> 
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
            showModal: false,
            thisProject: null,
        }
    },
    props: {
        user: Object,
        projects: Array,
    },
    created() {
        this.projects.forEach(project => {
            let arr = project.description.split('.');
            this.descriptions[project.id] = arr;
            this.index += 1;
        });
    },
    methods: {
        destroy(id) {
            this.$inertia.post(this.route('admin.projects.destroy', id));
        }
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

.tr:hover {
    background: #d2d2d2 !important;
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

button.close {
    background:transparent;
    border: 0; 
}

.close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover  {
    opacity: 0.75;
}

.modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto;
}
</style>
