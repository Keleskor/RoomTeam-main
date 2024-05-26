const { createApp } = Vue
const app = createApp({
  components:{
    vSelect: window["vue-select"],
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
      dialogFormVisible:false,
      rendered:false,
      currentWidth:document.documentElement.clientWidth,
      tour:{
        Date:null,
        location:null,
        total_users:null
      }
    }
  },
  methods: {
    initSwiper(id,settings){
      const slider = new Swiper(`#${id}`,{...settings});
    },
    async FindATour(){
      moment().locale('ru');
      if(!this.tour.Date || !this.tour.location || !this.tour.total_users){
        alert('Вы заполнили не все данные')
        return
      }

      const {data} = await axios('/backend/API/tours/FindATour/get.php',{params:{
        location:this.tour.location.title,
        min_users:this.tour.total_users.title.split('-')[0],
        max_users:this.tour.total_users.title.split('-')[1],
        date:moment(this.tour.Date).format('DD.MM.YYYY')
      }});
      if(data){
        window.location.href = `http://roomteam-main/mainProgram.php?id=${data.id}`
      }
      else{
        alert('Подходящие туры не найдены')
        return
      }
    }
  },
  computed:{
    isHeaderDowned(){
      return this.currentPosition>=50;
    },
    isTabletWidth(){
      return this.currentWidth<=1024;
    },
    isSmallTabletWidth(){
      return this.currentWidth<=768;
    },
    isPcWidth(){
      return this.currentWidth>=1025;
    },
    isRendered(){
      return this.rendered;
    }
  },
  watch:{
  },
  mounted() {
    document.addEventListener('scroll',()=>this.currentPosition = document.documentElement.scrollTop);
    window.addEventListener('resize',()=>this.currentWidth = document.documentElement.clientWidth);
    rendered = true;

    this.initSwiper('photo-report-swiper',{
      slidesPreview: 1,
      spaceBetween:20,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev'
      },
      pagination: {
         el: '.swiper-pagination',
         dynamicMainBullets:2,
         clickable: true,
      },
    });
    this.initSwiper('best-programs-swiper',{
      slidesPreview: 1,
      spaceBetween:20,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev'
      },
      pagination: {
         el: '.swiper-pagination',
         dynamicMainBullets:2,
         clickable: true,
      },
    });
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
let button_program_menu = document.querySelector('.button__program-menu');
let buttonClose_program_menu = document.querySelector('.introduction__block__close');
let program_menu_modal = document.querySelector('.introduction__block');
let introduction = document.querySelector('.introduction');
let program_heading = document.querySelector('.introduction__text');

button_burger_menu.addEventListener("click",()=>{
  if(document.querySelector('.introduction__block')){
    program_menu_modal.classList.remove('introduction__block__active');
  }
  main_header_block.classList.add('main-header__block__acitve');
  block.classList.add('block__active');
  body.classList.add('overflow');
  if(document.querySelector('.introduction')){
    introduction.style.zIndex = '2006';
  }
})
buttonClose_burger_menu.addEventListener("click",()=>{
  main_header_block.classList.remove('main-header__block__acitve');
  block.classList.remove('block__active');
  body.classList.remove('overflow');
})

/*****************************************hamburger menu END******************************************/

/*****************************************programm menu modal START****************************************/


if(document.querySelector('.button__program-menu')){
  button_program_menu.addEventListener("click",()=>{
    program_menu_modal.classList.add('introduction__block__active');
    block.classList.add('block__active');
    introduction.style.zIndex = '2008';
    window.scrollTo(0,0);
    body.classList.add('overflow');
    program_heading.classList.add('introduction__text__offline');
  })
}
if(document.querySelector('.introduction__block__close')){
  buttonClose_program_menu.addEventListener("click",()=>{
    program_menu_modal.classList.remove('introduction__block__active');
    block.classList.remove('block__active');
    introduction.style.zIndex = '2006';
    body.classList.remove('overflow');
    program_heading.classList.remove('introduction__text__offline');
  })
}

/*****************************************programm menu modal END*****************************************/