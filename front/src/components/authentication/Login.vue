<template>
    <div class="wrapper">

        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus=""
               v-model="username"/>
        <input type="password" class="form-control" name="password" placeholder="Password" required=""
               v-model="password"/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" @click="login">Login</button>


        <pre>
        {{$data}}
       </pre>

    </div>

</template>

<script>

    import axios from 'axios';


    export default {
        data() {
            return {
                username: '',
                password: ''
            }
        },

        methods: {
            login() {

                var data = {
                    client_id: 2,
                    client_secret: '7axGXYLRCp5pulIDEGG6u85GRywnjJM3u0vdMz4U',
                    grant_type: 'password',
                    username: this.username,
                    password: this.password
                };


                axios.post('http://localhost:8000/oauth/token',data)
                  .then(function (response) {
                    console.log(response);
                      //this.$auth.setToken(response.data.access_token,response.data.expires_in + Date.now);


                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }

        }

    }
</script>


<style>

</style>
