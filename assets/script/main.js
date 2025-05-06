const { createApp } = Vue;
let body = document.querySelector("body");
const app = createApp({
  components: {
    vSelect: window["vue-select"],
  },
  data() {
    return {
      Hotels: [],
      Tours: [],
      currentPage: 1,
      Filter: {
        SelectedClass: "any",
        EatClass: "any",
        BeachClass: "any",
        budget: null,
        SelectedTours: [],
      },
      HotelClass: [
        { label: "Любой", value: "any" },
        { label: "5 звезд", value: "5" },
        { label: "4 звезды", value: "4" },
        { label: "3 звезды", value: "3" },
        { label: "2 звезды", value: "2" },
        { label: "1 звезды", value: "1" },
      ],
      BeachClass: [
        { label: "Любой", value: "any" },
        { label: "Песчаный", value: "3" },
        { label: "Галеченый", value: "2" },
        { label: "Песчано-галечный", value: "1" },
      ],
      EatClass: [
        { label: "Любое", value: "any" },
        { label: "UAI - Ультра все включено", value: "UAI" },
        { label: "AI - Всё включено", value: "AI" },
        { label: "AI(noAlc) - Всё включено", value: "AI(noAlc)" },
        { label: "BB - Завтрак", value: "BB" },
        { label: "LHB - Завтрак + обед", value: "LHB" },
        { label: "FB - Завтрак, обед, ужин", value: "FB" },
        { label: "HB - Завтрак + ужин", value: "HB" },
        { label: "RO - Без питания", value: "RO" },
      ],
      tours: [
        { title: "Закопане (Польша)" },
        { title: "Дурмитор (Черногория)" },
        { title: "Гудаури (Грузия)" },
        { title: "Чимбулак (Казахстан)" },
        { title: "Улудаг (Турция)" },
        { title: "Венген (Швейцария)" },
      ],
      participants: [
        { title: "4-6" },
        { title: "6-8" },
        { title: "8-10" },
        { title: "10-12" },
        { title: "12-14" },
      ],
      currentPosition: 0,
      dialogFormVisible: false,
      rendered: false,
      currentWidth: document.documentElement.clientWidth,
      tour: {
        Date: null,
        location: null,
        total_users: null,
      },
    };
  },
  methods: {
    initSwiper(id, settings) {
      if (!Swiper) return;
      const slider = new Swiper(`#${id}`, { ...settings });
    },
    GetPrice(amount) {
      const formatter = new Intl.NumberFormat("ru-RU", {
        style: "currency",
        currency: "KZT",
        minimumFractionDigits: 0,
      });
      return formatter.format(amount);
    },
    async FindATour() {
      moment().locale("ru");
      if (!this.tour.Date || !this.tour.location || !this.tour.total_users) {
        alert("Вы заполнили не все данные");
        return;
      }
      const { data } = await axios("/backend/API/tours/FindATour/get.php", {
        params: {
          location: this.tour.location.title,
          min_users: this.tour.total_users.title.split("-")[0],
          max_users: this.tour.total_users.title.split("-")[1],
          date: moment(this.tour.Date).format("DD.MM.YYYY"),
        },
      });
      if (data) {
        window.location.href = `${window.location.origin}/mainProgram.php?id=${data.id}`;
      } else {
        let prompt_modal = document.querySelector('.prompt-modal');
        let prompt_close = document.querySelector('.prompt-modal__close');
          prompt_modal.classList.add('prompt-modal__close-on');
          body.classList.add('overflow');
          prompt_modal.classList.add('overflow-black');
          prompt_close.addEventListener('click',()=>{
            prompt_modal.classList.remove('prompt-modal__close-on');
            prompt_modal.classList.remove('overflow-black');
            body.classList.remove('overflow');
          })
        return;
      }
    },
    async GetHotels() {
      const Hotels = await axios("/backend/API/hotels/get.php");
      return Hotels;
    },
    async GetTours() {
      const Tours = await axios("/backend/API/tours/all.php");
      return Tours;
    },
  },
  computed: {
    isHeaderDowned() {
      return this.currentPosition >= 50;
    },
    isTabletWidth() {
      return this.currentWidth <= 1024;
    },
    isSmallTabletWidth() {
      return this.currentWidth <= 768;
    },
    isPcWidth() {
      return this.currentWidth >= 1025;
    },
    HotelsPrices() {
      if (!this.Hotels.length) return [25753, 184400];
      const Prices = this.Hotels.map((x) => x.balance).sort((a, b) => a - b);
      return [Prices[0], Prices[Prices.length - 1]];
    },
    isRendered() {
      return this.rendered;
    },

    marks() {
      const OutObj = {};

      this.HotelsPrices.forEach((price) => (OutObj[price] = price.toString()));
      return OutObj;
    },

    FilteredHotels() {
      return this.Hotels.filter((Hotel) => {
        if (this.Filter.BeachClass != "any") {
          if (this.Filter.BeachClass != Hotel.beachclass) {
            return false;
          }
        }
        if (this.Filter.EatClass != "any") {
          if (this.Filter.EatClass != Hotel.eatclass) {
            return false;
          }
        }
        if (this.Filter.SelectedClass != "any") {
          if (this.Filter.SelectedClass != Hotel.hotelclass) {
            return false;
          }
        }
        if (this.Filter.SelectedTours.length) {
          if (!this.Filter.SelectedTours.some((id) => id == Hotel.tourIds)) {
            return false;
          }
        }
        if (this.Filter.budget) {
          if (
            this.Filter.budget[0] > Hotel.balance ||
            this.Filter.budget[1] < Hotel.balance
          ) {
            return false;
          }
        }
        return true;
      });
    },
    DisplaybleHotels() {
      return this.FilteredHotels.slice(
        (this.currentPage - 1) * 10,
        this.currentPage * 10
      );
    },
  },
  watch: {},
  mounted() {
    try {
      this.GetHotels().then((res) => {
        this.Hotels = res.data;
      });
    } catch (e) {}
    try {
      this.GetTours().then((res) => {
        this.Tours = res.data;
      });
    } catch (e) {}
    document.addEventListener(
      "scroll",
      () => (this.currentPosition = document.documentElement.scrollTop)
    );
    window.addEventListener(
      "resize",
      () => (this.currentWidth = document.documentElement.clientWidth)
    );
    rendered = true;

    this.initSwiper("photo-report-swiper", {
      slidesPreview: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        dynamicMainBullets: 2,
        clickable: true,
      },
    });
    this.initSwiper("best-programs-swiper", {
      slidesPreview: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        dynamicMainBullets: 2,
        clickable: true,
      },
    });
  },
});
app.config.warnHandler = () => null;
app.use(ElementPlus).mount("#app");

/*****************************************hamburger menu START******************************************/

let button_burger_menu = document.querySelector(".button__burger-menu");
let buttonClose_burger_menu = document.querySelector(
  ".main-header__item__close"
);
let main_header_block = document.querySelector(".main-header__block");
let main_header = document.querySelector(".main-header");
let block = document.querySelector(".block");
let button_program_menu = document.querySelector(".button__program-menu");
let buttonClose_program_menu = document.querySelector(
  ".introduction__block__close"
);
let program_menu_modal = document.querySelector(".introduction__block");
let introduction = document.querySelector(".introduction");
let program_heading = document.querySelector(".introduction__text");

button_burger_menu.addEventListener("click", () => {
  if (document.querySelector(".introduction__block")) {
    program_menu_modal.classList.remove("introduction__block__active");
  }
  main_header_block.classList.add("main-header__block__acitve");
  block.classList.add("block__active");
  body.classList.add("overflow");
  if (document.querySelector(".introduction")) {
    introduction.style.zIndex = "2006";
  }
});
buttonClose_burger_menu.addEventListener("click", () => {
  main_header_block.classList.remove("main-header__block__acitve");
  block.classList.remove("block__active");
  body.classList.remove("overflow");
});

/*****************************************hamburger menu END******************************************/

/*****************************************programm menu modal START****************************************/

if (document.querySelector(".button__program-menu")) {
  button_program_menu.addEventListener("click", () => {
    program_menu_modal.classList.add("introduction__block__active");
    block.classList.add("block__active");
    introduction.style.zIndex = "2008";
    window.scrollTo(0, 0);
    body.classList.add("overflow");
    program_heading.classList.add("introduction__text__offline");
  });
}
if (document.querySelector(".introduction__block__close")) {
  buttonClose_program_menu.addEventListener("click", () => {
    program_menu_modal.classList.remove("introduction__block__active");
    block.classList.remove("block__active");
    introduction.style.zIndex = "2006";
    body.classList.remove("overflow");
    program_heading.classList.remove("introduction__text__offline");
  });
}

/*****************************************programm menu modal END*****************************************/
