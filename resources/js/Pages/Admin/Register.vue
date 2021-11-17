<template>
  <div class="app">
      <div class="form">
          <div class="bg-white p-5 col-12 col-md-4" style="border-radius: 20px;">
                <h2 style="color: rgba(47,54,95); font-weight: 900; text-align: center">
                    Welcome
                </h2>
                <div class="mx-auto" style="margin-top: 30px; background-color: rgba(59,130,246,0.5); width: 100px; height: 2px">
                </div>

                <b-form @submit.prevent="submit" class="w-100">
                    <b-form-group label="Name" class="mt-5">
                        <b-form-input class="" v-model="form.name" placeholder="Enter your email" required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Email" class="mt-4">
                        <b-form-input class="" v-model="form.email" placeholder="Enter your email" required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Password" class="mt-4">
                        <b-form-input class="" type="password" v-model="form.password" placeholder="Enter your password" required>
                        </b-form-input>
                    </b-form-group>

                    <div class="d-flex flex-row mt-4">
                        <div class="col-12" style="text-align: right">
                            <b-button type="submit" class="text-white border-0 p-2 px-4" variant="" style="background-color: rgba(47,54,95)">Log In</b-button>
                        </div>
                    </div>
                </b-form>
          </div>
      </div>
  </div>
</template>

<script>

export default {
  components: {
    
  },
  data() {
    return {
      form: this.$inertia.form({
        name: 'Priyank',
        email: 'priyank@taliup.ca',
        password: 'asdfasdf',
        is_admin: 1,
      }),
    }
  },
  methods: {
    submit() {
        // console.log(this.route('admin.login'));
        this.form.post(this.route('admin.register'));
    },
  },
}
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    .app {
        height: 100vh;
        font-family: 'Poppins';
        background-color: #f7f7f7;
    }

    .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        /* padding-top: 50px; */
        align-items: center;
        position: relative;
    }
</style>