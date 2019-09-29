
require('./bootstrap');

window.Vue = require('vue');

var app = new Vue({
    el: '#app',

    data:function() {
    return {
      posts: {
      	fullname:'',
      	country:'',
      },
      errors: []
    }
  },

  methods:{
  	created() {
    axios.post('/createbooking', this,posts)
    .then(response => {
      console.log(response);
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
  }
})


