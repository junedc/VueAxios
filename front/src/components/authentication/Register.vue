<template>

    <div class="wrapper">
        <form class="form-signin">
            <h2 class="form-signin-heading">Please register</h2>


            <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus=""
                   v-model="name"/>

            <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus=""
                   v-model="username"/>
            <input type="password" class="form-control" name="password" placeholder="Password" required=""
                   v-model="password"/>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>

        <pre>
          {{ $data}}
       </pre>
    </div>


</template>

<script>

    export default {
        data() {
            return {
                name: '',
                username: '',
                password: ''
            }
        }

    }

</script>


<style>


</style>