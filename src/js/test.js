import axios from 'axios'
const { createApp } = window.Vue;
const component = {
    data(){
        return{
            info: null
        }
    },
    mounted () {
        axios
          .get('https://api.coindesk.com/v1/bpi/currentprice.json')
          .then(response => (this.info = response))
      }
}
/* mount on main */
window.addEventListener('DOMContentLoaded', () => {
  const app = createApp(component)
  app.mount("#main")
})

