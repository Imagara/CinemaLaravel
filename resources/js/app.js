require('./bootstrap');

import { createApp } from 'vue'
import Home from './components/Home'

// console.log('is running')

const myApp = createApp(Home)
myApp.mount('#app')