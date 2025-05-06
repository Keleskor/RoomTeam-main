<?php
    require "assets/connect/header.html";
?>
<link rel="stylesheet" href="assets/styles/hotels.css">
<div #hotels>
  <div class="Hotel">
    <div class="Hotel__head">
      <h1 class="Hotel__title">
          Бронируйте отели по всему миру
      </h1>
      <div class="hotel__mob-filter">
        <h3 class="hotel__mob-heading">
          Фильтры
        </h3>
        <img src="/assets/icons/filter (1).png" alt="" class="hotel__mob-icon">
      </div>
      <div>
  </div>
    </div>
    <div class="Hotel__body">
        <div class="Hotel__block-filter">
          <div class="Hotel__Filters">
            <div class="Hotel__Filter">
              <h4 class="Hotel__Filter_title">Класс отеля</h4>
                <el-radio-group class="Hotel__Filter_group" v-model="Filter.SelectedClass">
                  <el-radio class="Hotel__option"  v-for="option in HotelClass" :value="option.value">
                      {{option.label}}
                      <el-rate
                      v-if="!isNaN(+option.value)"
                      v-model="option.value"
                      disabled
                      text-color="#ff9900"
                      />
                  </el-radio>
                </el-radio-group>
            </div>
            <div class="Hotel__Filter">
              <h4 class="Hotel__Filter_title">Питание</h4>
                <el-radio-group class="Hotel__Filter_group" v-model="Filter.EatClass">
                  <el-radio class="Hotel__option"  v-for="option in EatClass" :value="option.value">{{option.label}}</el-radio>
                </el-radio-group>
            </div>
            <div class="Hotel__Filter">
              <h4 class="Hotel__Filter_title">Тип пляжа</h4>
                <el-radio-group class="Hotel__Filter_group" v-model="Filter.BeachClass">
                  <el-radio class="Hotel__option"  v-for="option in BeachClass" :value="option.value">{{option.label}}</el-radio>
                </el-radio-group>
            </div>
            <div class="Hotel__Filter">
              <h4 class="Hotel__Filter_title">Бюджет, ₸</h4>
              <el-slider :min="HotelsPrices[0]"  :max="HotelsPrices[1]" :marks="marks"  v-model="Filter.budget" :step="10" range />
            </div>
            <div class="Hotel__Filter">
              <h4 class="Hotel__Filter_title">Туры</h4>
              <el-select
                v-model="Filter.SelectedTours"
                multiple
                clearable
                placeholder="Выберите туры"
             >
                <el-option
                  v-for="item in Tours"
                  :key="item.id"
                  :label="item.title"
                  :value="item.id"
                />
            </el-select>
            </div>
          </div>
        </div>
        <div class="Hotel__block">
       
             <ul  v-if="DisplaybleHotels.length" class="Hotels__list">
                <li class="HotelCard" :key="Hotel.index" v-for="Hotel in DisplaybleHotels">
                          <div class="wrapper__HotelCard__img">
                            <img class="HotelCard__img" :src="Hotel.picture">
                          </div>
                          <div class="HotelCard__body">
                                <div class="HotelCard__info">
                                  <div class="rate">
                                  <el-rate
                                        v-if="!isNaN(+Hotel.hotelclass)"
                                        v-model="Hotel.hotelclass"
                                        disabled
                                        show-score
                                        :score-template="`Оценка отеля ${Hotel.hotelclass} из 5`"
                                        text-color="#ff9900"
                                        
                                  />
                                  </div>
                                  <a :href=`/hotel.php?id=${Hotel.index}`>
                                    {{Hotel.name}}
                                  </a>
                                </div>
                                <div class="HotelCard__prices">
                                  <span>Цена от</span>
                                  <a  :href=`/hotel.php?id=${Hotel.index}`>
                                    {{GetPrice(+Hotel.balance)}}
                                  </a>
                                  <a class="HotelCard__btn" :href=`/hotel.php?id=${Hotel.index}`>Показать отель</a>
                                </div>
                          </div>
                </li>
              </ul>
                <div v-else-if="!Hotels.length">
                      <h4 class="Hotel__Filter_title">Загрузка отелей...</h4>
                </div>
                <div v-else>
                      <h4 class="Hotel__Filter_title">Отели не найдены.</h4>
                </div>
      
             
     
          <div class="Hotel__pagination">
          <el-pagination
            size="large"
            @change="(e) => (currentPage = e)"
            background
            layout="prev, pager, next"
            :total="FilteredHotels.length"
            class="mt-4"
          />
          </div>
        </div>
    </div>
  </div>
 
</div>
<?php
    require "assets/connect/footer.html";
?>