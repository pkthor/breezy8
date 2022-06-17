<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma29',$page.props.auth.user)">29</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma30',$page.props.auth.user)">30</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma31',$page.props.auth.user)">31</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma32',$page.props.auth.user)">32</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma33',$page.props.auth.user)">33</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma34',$page.props.auth.user)">34</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma35',$page.props.auth.user)">35</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma36',$page.props.auth.user)">36</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma37',$page.props.auth.user)">37</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma38',$page.props.auth.user)">38</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma39',$page.props.auth.user)">39</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma40',$page.props.auth.user)">40</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma41',$page.props.auth.user)">41</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma42',$page.props.auth.user)">42</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma43',$page.props.auth.user)">43</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma44',$page.props.auth.user)">44</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma45',$page.props.auth.user)">45</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma46',$page.props.auth.user)">46</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma47',$page.props.auth.user)">47</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma48',$page.props.auth.user)">48</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma49',$page.props.auth.user)">49</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma50',$page.props.auth.user)">50</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma51',$page.props.auth.user)">51</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma52',$page.props.auth.user)">52</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma53',$page.props.auth.user)">53</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma54',$page.props.auth.user)">54</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma55',$page.props.auth.user)">55</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma56',$page.props.auth.user)">56</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma57',$page.props.auth.user)">57</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma58',$page.props.auth.user)">58</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma59',$page.props.auth.user)">59</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma60',$page.props.auth.user)">60</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma61',$page.props.auth.user)">61</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma62',$page.props.auth.user)">62</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Alma63',$page.props.auth.user)">63</button>
  </div>
</template>

<script setup>
import { useReaderStore } from "../stores/Readers";
import { useMenuStore } from "../stores/Menus";
import { ref } from "vue";
import { storeToRefs,defineStore } from "pinia";
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from "@inertiajs/inertia";
import axios from 'axios'

const isOpen = ref(true);
const selectedReader = useReaderStore();
const menuStatus = useMenuStore();

var allReaders = [
  {
    uuid: 101,
    bookID: 10,
    book: "Alma",
    chapter: 1,
    narrator: "Settimia Lui",
    narratorImageName: "SettimiaLui",
    chapterImageName: "BOMpic",
    audioFileName: "Alma1",
    isActiveBookmark: false,
    src: "assets/media/Alma1.mp3",
  },
  {
    uuid: 102,
    bookID: 10,
    book: "Alma",
    chapter: 2,
    narrator: "Gabriele Di Liberto",
    narratorImageName: "GabrieleDiLiberto",
    chapterImageName: "BOMpic",
    audioFileName: "Alma2",
    isActiveBookmark: false,
    src: "assets/media/Alma2.mp3",
  },
  {
    uuid: 103,
    bookID: 10,
    book: "Alma",
    chapter: 3,
    narrator: "Federica Netto",
    narratorImageName: "FedericaNetto",
    chapterImageName: "BOMpic",
    audioFileName: "Alma3",
    isActiveBookmark: false,
    src: "assets/media/Alma3.mp3",
  },
  {
    uuid: 104,
    bookID: 10,
    book: "Alma",
    chapter: 4,
    narrator: "Alexandra Pavesi",
    narratorImageName: "AlexandraPavesi",
    chapterImageName: "BOMpic",
    audioFileName: "Alma4",
    isActiveBookmark: false,
    src: "assets/media/Alma4.mp3",
  },
  {
    uuid: 105,
    bookID: 10,
    book: "Alma",
    chapter: 5,
    narrator: "Miriam Bressan",
    narratorImageName: "MiriamBressan",
    chapterImageName: "BOMpic",
    audioFileName: "Alma5",
    isActiveBookmark: false,
    src: "assets/media/Alma5.mp3",
  },
  {
    uuid: 106,
    bookID: 10,
    book: "Alma",
    chapter: 6,
    narrator: "Giovanni Pulvirenti",
    narratorImageName: "GiovanniPulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma6",
    isActiveBookmark: false,
    src: "assets/media/Alma6.mp3",
  },
  {
    uuid: 107,
    bookID: 10,
    book: "Alma",
    chapter: 7,
    narrator: "Elvisa De Santis",
    narratorImageName: "ElvisaDeSantis",
    chapterImageName: "BOMpic",
    audioFileName: "Alma7",
    isActiveBookmark: false,
    src: "assets/media/Alma7.mp3",
  },
  {
    uuid: 108,
    bookID: 10,
    book: "Alma",
    chapter: 8,
    narrator: "Melissa Reyes",
    narratorImageName: "MelissaReyes",
    chapterImageName: "BOMpic",
    audioFileName: "Alma8",
    isActiveBookmark: false,
    src: "assets/media/Alma8.mp3",
  },
  {
    uuid: 109,
    bookID: 10,
    book: "Alma",
    chapter: 9,
    narrator: "Antonio Murgia",
    narratorImageName: "AntonioMurgia",
    chapterImageName: "BOMpic",
    audioFileName: "Alma9",
    isActiveBookmark: false,
    src: "assets/media/Alma9.mp3",
  },
  {
    uuid: 110,
    bookID: 10,
    book: "Alma",
    chapter: 10,
    narrator: "Maria Chiara Murgia",
    narratorImageName: "MariaMurgia",
    chapterImageName: "BOMpic",
    audioFileName: "Alma10",
    isActiveBookmark: false,
    src: "assets/media/Alma10.mp3",
  },
  {
    uuid: 111,
    bookID: 10,
    book: "Alma",
    chapter: 11,
    narrator: "Edoardo Iob",
    narratorImageName: "EdoardoIob",
    chapterImageName: "BOMpic",
    audioFileName: "Alma11",
    isActiveBookmark: false,
    src: "assets/media/Alma11.mp3",
  },
  {
    uuid: 112,
    bookID: 10,
    book: "Alma",
    chapter: 12,
    narrator: "Edoardo Iob",
    narratorImageName: "EdoardoIob",
    chapterImageName: "BOMpic",
    audioFileName: "Alma12",
    isActiveBookmark: false,
    src: "assets/media/Alma12.mp3",
  },
  {
    uuid: 113,
    bookID: 10,
    book: "Alma",
    chapter: 13,
    narrator: "Matteo Lusso",
    narratorImageName: "MatteoLusso",
    chapterImageName: "BOMpic",
    audioFileName: "Alma13",
    isActiveBookmark: false,
    src: "assets/media/Alma13.mp3",
  },
  {
    uuid: 114,
    bookID: 10,
    book: "Alma",
    chapter: 14,
    narrator: "Vincenzo Saeli",
    narratorImageName: "VincenzoSaeli",
    chapterImageName: "Alma14",
    audioFileName: "Alma14",
    isActiveBookmark: false,
    src: "assets/media/Alma14.mp3",
  },
  {
    uuid: 115,
    bookID: 10,
    book: "Alma",
    chapter: 15,
    narrator: "Gaspar Lazarte",
    narratorImageName: "GasparLazarte",
    chapterImageName: "BOMpic",
    audioFileName: "Alma15",
    isActiveBookmark: false,
    src: "assets/media/Alma15.mp3",
  },
  {
    uuid: 116,
    bookID: 10,
    book: "Alma",
    chapter: 16,
    narrator: "Volodymyr Prystupa",
    narratorImageName: "VolodymyrPrystupa",
    chapterImageName: "BOMpic",
    audioFileName: "Alma16",
    isActiveBookmark: false,
    src: "assets/media/Alma16.mp3",
  },
  {
    uuid: 117,
    bookID: 10,
    book: "Alma",
    chapter: 17,
    narrator: "Francesco Locorotondo",
    narratorImageName: "FrancescoLocorotondo",
    chapterImageName: "Alma17",
    audioFileName: "Alma17",
    isActiveBookmark: false,
    src: "assets/media/Alma17.mp3",
  },
  {
    uuid: 118,
    bookID: 10,
    book: "Alma",
    chapter: 18,
    narrator: "Francesco Fasano",
    narratorImageName: "FrancescoFasano",
    chapterImageName: "Alma18",
    audioFileName: "Alma18",
    isActiveBookmark: false,
    src: "assets/media/Alma18.mp3",
  },
  {
    uuid: 119,
    bookID: 10,
    book: "Alma",
    chapter: 19,
    narrator: "Naomi Armenise",
    narratorImageName: "NaomiArmenise",
    chapterImageName: "BOMpic",
    audioFileName: "Alma19",
    isActiveBookmark: false,
    src: "assets/media/Alma19.mp3",
  },
  {
    uuid: 120,
    bookID: 10,
    book: "Alma",
    chapter: 20,
    narrator: "Patrizia Conforte",
    narratorImageName: "PatriziaConforte",
    chapterImageName: "Alma20",
    audioFileName: "Alma20",
    isActiveBookmark: false,
    src: "assets/media/Alma20.mp3",
  },
  {
    uuid: 121,
    bookID: 10,
    book: "Alma",
    chapter: 21,
    narrator: "Maria Arcidiacano",
    narratorImageName: "MariaArcidiacano",
    chapterImageName: "BOMpic",
    audioFileName: "Alma21",
    isActiveBookmark: false,
    src: "assets/media/Alma21.mp3",
  },
  {
    uuid: 122,
    bookID: 10,
    book: "Alma",
    chapter: 22,
    narrator: "Francesco Fasano",
    narratorImageName: "FrancescoFasano",
    chapterImageName: "BOMpic",
    audioFileName: "Alma22",
    isActiveBookmark: false,
    src: "assets/media/Alma22.mp3",
  },
  {
    uuid: 123,
    bookID: 10,
    book: "Alma",
    chapter: 23,
    narrator: "Venerina Malara",
    narratorImageName: "VenerinaMalara",
    chapterImageName: "BOMpic",
    audioFileName: "Alma23",
    isActiveBookmark: false,
    src: "assets/media/Alma23.mp3",
  },
  {
    uuid: 124,
    bookID: 10,
    book: "Alma",
    chapter: 24,
    narrator: "Emily Cascone",
    narratorImageName: "EmilyCascone",
    chapterImageName: "Alma24",
    audioFileName: "Alma24",
    isActiveBookmark: false,
    src: "assets/media/Alma24.mp3",
  },
  {
    uuid: 125,
    bookID: 10,
    book: "Alma",
    chapter: 25,
    narrator: "Rosa Calabrese",
    narratorImageName: "RosaCalabrese",
    chapterImageName: "BOMpic",
    audioFileName: "Alma25",
    isActiveBookmark: false,
    src: "assets/media/Alma25.mp3",
  },
  {
    uuid: 126,
    bookID: 10,
    book: "Alma",
    chapter: 26,
    narrator: "Rebecca Bertone",
    narratorImageName: "RebeccaBertone",
    chapterImageName: "Alma26",
    audioFileName: "Alma26",
    isActiveBookmark: false,
    src: "assets/media/Alma26.mp3",
  },
  {
    uuid: 127,
    bookID: 10,
    book: "Alma",
    chapter: 27,
    narrator: "Debora Siniscalchi",
    narratorImageName: "DeboraSiniscalchi",
    chapterImageName: "BOMpic",
    audioFileName: "Alma27",
    isActiveBookmark: false,
    src: "assets/media/Alma27.mp3",
  },
  {
    uuid: 128,
    bookID: 10,
    book: "Alma",
    chapter: 28,
    narrator: "Settimia Lui",
    narratorImageName: "SettimiaLui",
    chapterImageName: "BOMpic",
    audioFileName: "Alma28",
    isActiveBookmark: false,
    src: "assets/media/Alma28.mp3",
  },
  {
    uuid: 129,
    bookID: 10,
    book: "Alma",
    chapter: 29,
    narrator: "Nicola Virgilio",
    narratorImageName: "NicolaVirgilio",
    chapterImageName: "BOMpic",
    audioFileName: "Alma29",
    isActiveBookmark: false,
    src: "assets/media/Alma29.mp3",
  },
  {
    uuid: 130,
    bookID: 10,
    book: "Alma",
    chapter: 30,
    narrator: "Elisa Carrus Giolitto",
    narratorImageName: "ElisaCarrusGiolitto",
    chapterImageName: "Alma30",
    audioFileName: "Alma30",
    isActiveBookmark: false,
    src: "assets/media/Alma30.mp3",
  },
  {
    uuid: 131,
    bookID: 10,
    book: "Alma",
    chapter: 31,
    narrator: "Davide Giugliarelli",
    narratorImageName: "DavideGiugliarelli",
    chapterImageName: "Alma3",
    audioFileName: "Alma31",
    isActiveBookmark: false,
    src: "assets/media/Alma31.mp3",
  },
  {
    uuid: 132,
    bookID: 10,
    book: "Alma",
    chapter: 32,
    narrator: "Cristina Perricone",
    narratorImageName: "CristinaPerricone",
    chapterImageName: "Alma32",
    audioFileName: "Alma32",
    isActiveBookmark: false,
    src: "assets/media/Alma32.mp3",
  },
  {
    uuid: 133,
    bookID: 10,
    book: "Alma",
    chapter: 33,
    narrator: "Stefano Pace",
    narratorImageName: "StefanoPace",
    chapterImageName: "BOMpic",
    audioFileName: "Alma33",
    isActiveBookmark: false,
    src: "assets/media/Alma33.mp3",
  },
  {
    uuid: 134,
    bookID: 10,
    book: "Alma",
    chapter: 34,
    narrator: "Emanuele Cascone",
    narratorImageName: "EmanueleCascone",
    chapterImageName: "BOMpic",
    audioFileName: "Alma34",
    isActiveBookmark: false,
    src: "assets/media/Alma34.mp3",
  },
  {
    uuid: 135,
    bookID: 10,
    book: "Alma",
    chapter: 35,
    narrator: "Jeimy Sisto",
    narratorImageName: "JeimySisto",
    chapterImageName: "BOMpic",
    audioFileName: "Alma35",
    isActiveBookmark: false,
    src: "assets/media/Alma35.mp3",
  },
  {
    uuid: 136,
    bookID: 10,
    book: "Alma",
    chapter: 36,
    narrator: "Marialuisa Di Liberto",
    narratorImageName: "MarialuisaDiLiberto",
    chapterImageName: "Alma36",
    audioFileName: "Alma36",
    isActiveBookmark: false,
    src: "assets/media/Alma36.mp3",
  },
  {
    uuid: 137,
    bookID: 10,
    book: "Alma",
    chapter: 37,
    narrator: "Jessica Caramia",
    narratorImageName: "JessicaCaramia",
    chapterImageName: "Alma37",
    audioFileName: "Alma37",
    isActiveBookmark: false,
    src: "assets/media/Alma37.mp3",
  },
  {
    uuid: 138,
    bookID: 10,
    book: "Alma",
    chapter: 38,
    narrator: "Marilene Rossetti",
    narratorImageName: "MarileneRossetti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma38",
    isActiveBookmark: false,
    src: "assets/media/Alma38.mp3",
  },
  {
    uuid: 139,
    bookID: 10,
    book: "Alma",
    chapter: 39,
    narrator: "Domenico Corvasce",
    narratorImageName: "DomenicoCorvasce",
    chapterImageName: "BOMpic",
    audioFileName: "Alma39",
    isActiveBookmark: false,
    src: "assets/media/Alma39.mp3",
  },
  {
    uuid: 140,
    bookID: 10,
    book: "Alma",
    chapter: 40,
    narrator: "Davide Dicarolo",
    narratorImageName: "DavideDicarolo",
    chapterImageName: "BOMpic",
    audioFileName: "Alma40",
    isActiveBookmark: false,
    src: "assets/media/Alma40.mp3",
  },
  {
    uuid: 141,
    bookID: 10,
    book: "Alma",
    chapter: 41,
    narrator: "Igea Locorotondo",
    narratorImageName: "IgeaLocorotondo",
    chapterImageName: "BOMpic",
    audioFileName: "Alma41",
    isActiveBookmark: false,
    src: "assets/media/Alma41.mp3",
  },
  {
    uuid: 142,
    bookID: 10,
    book: "Alma",
    chapter: 42,
    narrator: "Joshua Corvasce",
    narratorImageName: "JoshuaCorvasce",
    chapterImageName: "BOMpic",
    audioFileName: "Alma42",
    isActiveBookmark: false,
    src: "assets/media/Alma42.mp3",
  },
  {
    uuid: 143,
    bookID: 10,
    book: "Alma",
    chapter: 43,
    narrator: "Carla Bertone",
    narratorImageName: "CarlaBertone",
    chapterImageName: "Alma43",
    audioFileName: "Alma43",
    isActiveBookmark: false,
    src: "assets/media/Alma43.mp3",
  },
  {
    uuid: 144,
    bookID: 10,
    book: "Alma",
    chapter: 44,
    narrator: "Pino Valle",
    narratorImageName: "PinoValle",
    chapterImageName: "Alma44",
    audioFileName: "Alma44",
    isActiveBookmark: false,
    src: "assets/media/Alma44.mp3",
  },
  {
    uuid: 145,
    bookID: 10,
    book: "Alma",
    chapter: 45,
    narrator: "Grazia Battezzato",
    narratorImageName: "GraziaBattezzato",
    chapterImageName: "BOMpic",
    audioFileName: "Alma45",
    isActiveBookmark: false,
    src: "assets/media/Alma45.mp3",
  },
  {
    uuid: 146,
    bookID: 10,
    book: "Alma",
    chapter: 46,
    narrator: "Micol Bressan",
    narratorImageName: "MicolBressan",
    chapterImageName: "Alma46",
    audioFileName: "Alma46",
    isActiveBookmark: false,
    src: "assets/media/Alma46.mp3",
  },
  {
    uuid: 147,
    bookID: 10,
    book: "Alma",
    chapter: 47,
    narrator: "Giacomo Bressan",
    narratorImageName: "GiacomoBressan",
    chapterImageName: "BOMpic",
    audioFileName: "Alma47",
    isActiveBookmark: false,
    src: "assets/media/Alma47.mp3",
  },
  {
    uuid: 148,
    bookID: 10,
    book: "Alma",
    chapter: 48,
    narrator: "Perla Pulvirenti",
    narratorImageName: "PerlaPulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma48",
    isActiveBookmark: false,
    src: "assets/media/Alma48.mp3",
  },
  {
    uuid: 149,
    bookID: 10,
    book: "Alma",
    chapter: 49,
    narrator: "Joy Pulvirenti",
    narratorImageName: "JoyPulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma49",
    isActiveBookmark: false,
    src: "assets/media/Alma49.mp3",
  },
  {
    uuid: 150,
    bookID: 10,
    book: "Alma",
    chapter: 50,
    narrator: "Giuseppe Pulvirenti",
    narratorImageName: "GiuseppePulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma50",
    isActiveBookmark: false,
    src: "assets/media/Alma50.mp3",
  },
  {
    uuid: 151,
    bookID: 10,
    book: "Alma",
    chapter: 51,
    narrator: "Giuseppe Pulvirenti",
    narratorImageName: "GiuseppePulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "Alma51",
    isActiveBookmark: false,
    src: "assets/media/Alma51.mp3",
  },
  {
    uuid: 152,
    bookID: 10,
    book: "Alma",
    chapter: 52,
    narrator: "Lorenzo Bertone",
    narratorImageName: "LorenzoBertone",
    chapterImageName: "BOMpic",
    audioFileName: "Alma52",
    isActiveBookmark: false,
    src: "assets/media/Alma52.mp3",
  },
  {
    uuid: 153,
    bookID: 10,
    book: "Alma",
    chapter: 53,
    narrator: "Angelika Iob",
    narratorImageName: "AngelikaIob",
    chapterImageName: "Alma53",
    audioFileName: "Alma53",
    isActiveBookmark: false,
    src: "assets/media/Alma53.mp3",
  },
  {
    uuid: 154,
    bookID: 10,
    book: "Alma",
    chapter: 54,
    narrator: "Daniela Caggese",
    narratorImageName: "DanielaCaggese",
    chapterImageName: "BOMpic",
    audioFileName: "Alma54",
    isActiveBookmark: false,
    src: "assets/media/Alma54.mp3",
  },
  {
    uuid: 155,
    bookID: 10,
    book: "Alma",
    chapter: 55,
    narrator: "Beatrice Dicarolo",
    narratorImageName: "BeatriceDicarolo",
    chapterImageName: "BOMpic",
    audioFileName: "Alma55",
    isActiveBookmark: false,
    src: "assets/media/Alma55.mp3",
  },
  {
    uuid: 156,
    bookID: 10,
    book: "Alma",
    chapter: 56,
    narrator: "Riccardo Vanoli",
    narratorImageName: "RiccardoVanoli",
    chapterImageName: "BOMpic",
    audioFileName: "Alma56",
    isActiveBookmark: false,
    src: "assets/media/Alma56.mp3",
  },
  {
    uuid: 157,
    bookID: 10,
    book: "Alma",
    chapter: 57,
    narrator: "Naomi Caramia",
    narratorImageName: "NaomiCaramia",
    chapterImageName: "BOMpic",
    audioFileName: "Alma57",
    isActiveBookmark: false,
    src: "assets/media/Alma57.mp3",
  },
  {
    uuid: 158,
    bookID: 10,
    book: "Alma",
    chapter: 58,
    narrator: "Naomi Caramia",
    narratorImageName: "NaomiCaramia",
    chapterImageName: "BOMpic",
    audioFileName: "Alma58",
    isActiveBookmark: false,
    src: "assets/media/Alma58.mp3",
  },
  {
    uuid: 159,
    bookID: 10,
    book: "Alma",
    chapter: 59,
    narrator: "Letizia Furia",
    narratorImageName: "LetiziaFuria",
    chapterImageName: "BOMpic",
    audioFileName: "Alma59",
    isActiveBookmark: false,
    src: "assets/media/Alma59.mp3",
  },
  {
    uuid: 160,
    bookID: 10,
    book: "Alma",
    chapter: 60,
    narrator: "Elisabetta Calabrese",
    narratorImageName: "ElisabettaCalabrese",
    chapterImageName: "BOMpic",
    audioFileName: "Alma60",
    isActiveBookmark: false,
    src: "assets/media/Alma60.mp3",
  },
  {
    uuid: 161,
    bookID: 10,
    book: "Alma",
    chapter: 61,
    narrator: "Chiara Cantoni",
    narratorImageName: "ChiaraCantoni",
    chapterImageName: "BOMpic",
    audioFileName: "Alma61",
    isActiveBookmark: false,
    src: "assets/media/Alma61.mp3",
  },
  {
    uuid: 162,
    bookID: 10,
    book: "Alma",
    chapter: 62,
    narrator: "Nancy Fiorillo",
    narratorImageName: "NancyFiorillo",
    chapterImageName: "BOMpic",
    audioFileName: "Alma62",
    isActiveBookmark: false,
    src: "assets/media/Alma62.mp3",
  },
  {
    uuid: 163,
    bookID: 10,
    book: "Alma",
    chapter: 63,
    narrator: "Francesca Di Ruscio",
    narratorImageName: "FrancescaDiRuscio",
    chapterImageName: "BOMpic",
    audioFileName: "Alma63",
    isActiveBookmark: false,
    src: "assets/media/Alma63.mp3",
  },
];

function selectReader(readerFileName) {
  isOpen.value = false;
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen;
  const newReader = allReaders.filter((reader) => reader.audioFileName === readerFileName);
  populateSelectedReader(newReader)
}
function selectReaderForUser(readerFileName,user) {
  isOpen.value = false;
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen;
  const newReader = allReaders.filter((reader) => reader.audioFileName === readerFileName);
  populateSelectedReaderForUserID(newReader,user.id)
}
function populateSelectedReaderForUserID(newReader,user_id) {
  selectedReader.uuid = newReader[0].uuid
  selectedReader.bookID = newReader[0].bookID
  selectedReader.book = newReader[0].book
  selectedReader.chapter = newReader[0].chapter
  selectedReader.narrator = newReader[0].narrator
  selectedReader.narratorImageName = newReader[0].narratorImageName
  selectedReader.chapterImageName = newReader[0].chapterImageName
  selectedReader.audioFileName = newReader[0].audioFileName
  selectedReader.isActiveBookmark = newReader[0].isActiveBookmark
  selectedReader.src = newReader[0].src
  newReader.splice(0,1) //Remove item at [0]. 2nd parameter means remove one item only
  axios.put(route('reader', { uuid: selectedReader.uuid, user_id: user_id }));
}

</script>