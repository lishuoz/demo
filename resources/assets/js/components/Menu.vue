<template>
  <aside class="menu">
    <p class="menu-label">

    </p>
    <ul class="menu-list">
      <!-- <li><a href="/" :class="{'is-active' : isActive('home')}" @click="setActive('home')">Home</a></li> -->
      <li><a href="/" :class="{'is-active' : isActive('home')}">Home</a></li>
      <li><a :class="{'is-active' : isActive('account')}">Active your account</a></li>
    </ul>
    <p class="menu-label">
      Demos
    </p>
    <ul class="menu-list">
      <li><a href="/loads" :class="{'is-active' : isActive('loads')}">Load Board</a></li>
      <li><a href="/rates" :class="{'is-active' : isActive('rates')}">Spot Rate</a></li>
      <li><a>Truck Load Ratio</a></li>
      <li><a>Dispatch</a></li>
    </ul>
    <p class="menu-label">
      Customer Service
    </p>
    <ul class="menu-list">
      <li><a>Support</a></li>
      <li><a>Chat</a></li>
      <li><a @click="changeUrl">Contact Us</a></li>
    </ul>
  </aside>
</template>

<script>
  export default {
    props: ['defaultItem'],
    data(){
      return {
        activeItem: this.defaultItem,
      }
    },
    methods: {
      isActive(menuItem){
        return this.activeItem === menuItem
      },
      setActive(menuItem){
        this.activeItem = menuItem
      },
      changeUrl(){
        window.location.href = window.location.href + '#contactform';
        location.reload();
      }
    },
  }
</script>
