const { createApp } = Vue
const app = createApp({
  components:{
    vSelect: window["vue-select"]
  },
  data() {
    return {
      tours: [
        { title: "Закопане (Польша)" },
        { title: "Дурмитор (Черногория)" },
        { title: "Гудаури (Грузия)" },
        { title: "Чимбулак (Казахстан)" },
        { title: "Улудаг (Турция)" },
        { title: "Венген (Швейцария)" }
      ],
      participants: [
        { title: "4-6" },
        { title: "6-8" },
        { title: "8-10" },
        { title: "10-12" },
        { title: "12-14" }
      ],
      currentPosition:0,
    }
  },
  computed:{
    isHeaderDowned(){
      return this.currentPosition>=250;
    }
  },
  mounted() {
    document.addEventListener('scroll',()=>this.currentPosition = document.documentElement.scrollTop);
  },
})
app.config.warnHandler = () => null;
app.mount('#app')

