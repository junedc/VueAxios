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
        <button class="btn btn-lg btn-primary btn-block">Login</button>


        <pre>
        {{$data}}
       </pre>

    </div>

</template>

<script>
    export default {
        data() {
            return {
                username: '',
                password: ''
            }
        }

    }
</script>


<style>

</style>
