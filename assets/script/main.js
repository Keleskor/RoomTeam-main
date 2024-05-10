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
      rendered:false,
      currentWidth:document.documentElement.clientWidth,
    }
  },
  methods: {
  },
  computed:{
    isHeaderDowned(){
      return this.currentPosition>=50;
    },
    isTabletWidth(){
      return this.currentWidth<=1024;
    },
    isPcWidth(){
      return this.currentWidth>=1025;
    },
    isRendered(){
      return this.rendered;
    }
  },
  mounted() {
    document.addEventListener('scroll',()=>this.currentPosition = document.documentElement.scrollTop);
    window.addEventListener('resize',()=>this.currentWidth = document.documentElement.clientWidth);
    rendered = true;
  },

})
app.config.warnHandler = () => null;
app.use(ElementPlus).mount('#app')


/*****************************************hamburger menu START******************************************/

let button_burger_menu = document.querySelector('.button__burger-menu');
let buttonClose_burger_menu = document.querySelector('.main-header__item__close');
let main_header_block = document.querySelector('.main-header__block');
let main_header = document.querySelector('.main-header');
let body = document.querySelector('body');
let block = document.querySelector('.block');

button_burger_menu.addEventListener("click",()=>{
  program_menu_modal.classList.remove('introduction__block__active');
  main_header_block.classList.add('main-header__block__acitve');
  block.classList.add('block__active');
  body.classList.add('overflow');
  introduction.style.zIndex = '2006';
})
buttonClose_burger_menu.addEventListener("click",()=>{
  main_header_block.classList.remove('main-header__block__acitve');
  block.classList.remove('block__active');
  body.classList.remove('overflow');
})

/*****************************************hamburger menu END******************************************/

/*****************************************programm menu modal START****************************************/

let button_program_menu = document.querySelector('.button__program-menu');
let buttonClose_program_menu = document.querySelector('.introduction__block__close');
let program_menu_modal = document.querySelector('.introduction__block');
let introduction = document.querySelector('.introduction');

button_program_menu.addEventListener("click",()=>{
  program_menu_modal.classList.add('introduction__block__active');
  block.classList.add('block__active');
  introduction.style.zIndex = '2008';
  window.scrollTo(0,0);
  body.classList.add('overflow');
})
buttonClose_program_menu.addEventListener("click",()=>{
  program_menu_modal.classList.remove('introduction__block__active');
  block.classList.remove('block__active');
  introduction.style.zIndex = '2006';
  body.classList.remove('overflow');
})

const mediaQuery = window.matchMedia('(max-width: 767px)')
function handleTabletChange(e) {
  if (e.matches) {
    var slider1 = new Swiper('.swiper', {
      spaceBetween:20,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev'
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
    });
  }
}
mediaQuery.addListener(handleTabletChange)
handleTabletChange(mediaQuery)
/*****************************************programm menu modal END*****************************************/