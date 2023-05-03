<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <NavView></NavView>
  <HomeView></HomeView>
  <AboutView></AboutView>
  <ContactView></ContactView>
  <FooterView></FooterView>
</template>

<script>
import NavView from './components/NavView.vue'
import HomeView from './components/HomeView.vue'
import AboutView from './components/AboutView.vue'
import ContactView from './components/ContactView.vue'
import FooterView from './components/FooterView.vue'
export default {
  name: 'App',
  components: {
    HomeView,
    NavView,
    AboutView,
    ContactView,
    FooterView
  }
}
</script>

<style>
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
