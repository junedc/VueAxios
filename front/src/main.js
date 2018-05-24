import Vue from 'vue'
import App from './App'
import router from './router/'
import Auth from '@/packages/auth/Auth.js'


Vue.config.productionTip = false

Vue.use(Auth)


new Vue({
    el: '#app',
    router,
    render: h => h(App)
})
