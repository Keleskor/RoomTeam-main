const { createApp } = Vue
const app = createApp({
  components:{
    vSelect: window["vue-select"],
  },
  data() {
    return {
      SelectedDate:null,
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
      dialogFormVisible:false,
      isRendered:false,
      currentWidth:document.documentElement.clientWidth,
    }
  },
  methods: {
    handleChange(value){
      console.log(value)
    },
  },
  computed:{
    isHeaderDowned(){
      return this.currentPosition>=50;
    },
    isTabletWidth(){
      return this.currentWidth<=1024;
    }
  },
  mounted() {
    document.addEventListener('scroll',()=>this.currentPosition = document.documentElement.scrollTop);
    window.addEventListener('resize',()=>this.currentWidth = document.documentElement.clientWidth);
    isRendered = true;
  },

})
app.config.warnHandler = () => null;
app.use(ElementPlus).mount('#app')
