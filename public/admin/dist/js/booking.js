var v = new Vue({
    el: '#app',

    data:{
      url:'http://127.0.0.1:8000',
      showPickUp:false,
      selectedValue:'',
      databooking:[],
      booking: {
        fullname:'',
        country:'',
        date:'',
        package:'',
        person:'',
        pickup:'',
        pickuparea:'',
        contact:'',
        food:'',
      },
      errors: []
    },
    created(){
      this.showData(); 
    },
    
   methods:{
    showData() {
      axios.get(this.url+'/createbooking', this.databooking)
      .then(response => {
        this.databooking = response.data
      })
      .catch(e => {
        this.errors.push(e)
      })
    },
    
  	createdData() {
          var formData = v.formData(v.booking)
            axios.post(this.url+'/createbooking/create', this.booking)
            .then(response => {
              console.log(response);
              this.booking = response.data;
        })
        .catch(e => {
          this.errors.push(e)
          })
        this.showData();
    },
    formData(obj) {
      var formData = new FormData();
            for (var key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
    checkValueSelect(){
        this.selectedValue = event.target.value;
        if((this.selectedValue === 'Ubud') || (this.selectedValue === 'Nusa Dua/Jimbaran') || (this.selectedValue == 'Kuta Seminyak Area')){
            this.showPickUp = true
        }else{
            this.showPickUp = false
        }
    },

  }
  //end create data booking
})

