<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi29',$page.props.auth.user)">29</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi30',$page.props.auth.user)">30</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi31',$page.props.auth.user)">31</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi32',$page.props.auth.user)">32</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('2Nefi33',$page.props.auth.user)">33</button>
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
    uuid: 28,
    bookID: 3,
    book: "2 Nefi",
    chapter: 1,
    narrator: "Naomi Caraffa",
    narratorImageName: "NaomiCaraffa",
    chapterImageName: "2Nephi1",
    audioFileName: "2Nefi1",
    isActiveBookmark: false,
    src: "assets/media/2Nefi1.mp3",
  },
  {
    uuid: 29,
    bookID: 3,
    book: "2 Nefi",
    chapter: 2,
    narrator: "Francesca Spatola",
    narratorImageName: "FrancescaSpatola",
    chapterImageName: "2Nephi2",
    audioFileName: "2Nefi2",
    isActiveBookmark: false,
    src: "assets/media/2Nefi2.mp3",
  },
  {
    uuid: 30,
    bookID: 3,
    book: "2 Nefi",
    chapter: 3,
    narrator: "Florinda Ferreri",
    narratorImageName: "FlorindaFerreri",
    chapterImageName: "2Nephi3",
    audioFileName: "2Nefi3",
    isActiveBookmark: false,
    src: "assets/media/2Nefi3.mp3",
  },
  {
    uuid: 31,
    bookID: 3,
    book: "2 Nefi",
    chapter: 4,
    narrator: "Andrea Santoro",
    narratorImageName: "AndreaSantoro",
    chapterImageName: "2Nephi4",
    audioFileName: "2Nefi4",
    isActiveBookmark: false,
    src: "assets/media/2Nefi4.mp3",
  },
  {
    uuid: 32,
    bookID: 3,
    book: "2 Nefi",
    chapter: 5,
    narrator: "Patrizia Conforte",
    narratorImageName: "PatriziaConforte",
    chapterImageName: "2Nephi5",
    audioFileName: "2Nefi5",
    isActiveBookmark: false,
    src: "assets/media/2Nefi5.mp3",
  },
  {
    uuid: 33,
    bookID: 3,
    book: "2 Nefi",
    chapter: 6,
    narrator: "Vittoria Todisco",
    narratorImageName: "VittoriaTodisco",
    chapterImageName: "2Nephi6",
    audioFileName: "2Nefi6",
    isActiveBookmark: false,
    src: "assets/media/2Nefi6.mp3",
  },
  {
    uuid: 34,
    bookID: 3,
    book: "2 Nefi",
    chapter: 7,
    narrator: "Dario De Angelis",
    narratorImageName: "DarioDeAngelis",
    chapterImageName: "2Nephi7",
    audioFileName: "2Nefi7",
    isActiveBookmark: false,
    src: "assets/media/2Nefi7.mp3",
  },
  {
    uuid: 35,
    bookID: 3,
    book: "2 Nefi",
    chapter: 8,
    narrator: "Rinaldo Paoletti",
    narratorImageName: "RinaldoPaoletti",
    chapterImageName: "2Nephi8",
    audioFileName: "2Nefi8",
    isActiveBookmark: false,
    src: "assets/media/2Nefi8.mp3",
  },
  {
    uuid: 36,
    bookID: 3,
    book: "2 Nefi",
    chapter: 9,
    narrator: "Sara Purpari",
    narratorImageName: "SaraPurpari",
    chapterImageName: "2Nephi9",
    audioFileName: "2Nefi9",
    isActiveBookmark: false,
    src: "assets/media/2Nefi9.mp3",
  },
  {
    uuid: 37,
    bookID: 3,
    book: "2 Nefi",
    chapter: 10,
    narrator: "Maurizio Conforte",
    narratorImageName: "MaurizioConforte",
    chapterImageName: "2Nephi10",
    audioFileName: "2Nefi10",
    isActiveBookmark: false,
    src: "assets/media/2Nefi10.mp3",
  },
  {
    uuid: 38,
    bookID: 3,
    book: "2 Nefi",
    chapter: 11,
    narrator: "Stefania Tonon",
    narratorImageName: "StefaniaTonon",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi11",
    isActiveBookmark: false,
    src: "assets/media/2Nefi11.mp3",
  },
  {
    uuid: 39,
    bookID: 3,
    book: "2 Nefi",
    chapter: 12,
    narrator: "Santo Rosato",
    narratorImageName: "SantoRosato",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi12",
    isActiveBookmark: false,
    src: "assets/media/2Nefi12.mp3",
  },
  {
    uuid: 40,
    bookID: 3,
    book: "2 Nefi",
    chapter: 13,
    narrator: "Rita Pollina",
    narratorImageName: "RitaPollina",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi13",
    isActiveBookmark: false,
    src: "assets/media/2Nefi13.mp3",
  },
  {
    uuid: 41,
    bookID: 3,
    book: "2 Nefi",
    chapter: 14,
    narrator: "Nicolò Rodio",
    narratorImageName: "NicoloRodio",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi14",
    isActiveBookmark: false,
    src: "assets/media/2Nefi14.mp3",
  },
  {
    uuid: 42,
    bookID: 3,
    book: "2 Nefi",
    chapter: 15,
    narrator: "Eleonora Caravella",
    narratorImageName: "EleonoraCaravella",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi15",
    isActiveBookmark: false,
    src: "assets/media/2Nefi15.mp3",
  },
  {
    uuid: 43,
    bookID: 3,
    book: "2 Nefi",
    chapter: 16,
    narrator: "Nico Calabrese",
    narratorImageName: "NicoCalabrese",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi16",
    isActiveBookmark: false,
    src: "assets/media/2Nefi16.mp3",
  },
  {
    uuid: 44,
    bookID: 3,
    book: "2 Nefi",
    chapter: 17,
    narrator: "Davide Dicarolo",
    narratorImageName: "DavideDicarolo",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi17",
    isActiveBookmark: false,
    src: "assets/media/2Nefi17.mp3",
  },
  {
    uuid: 45,
    bookID: 3,
    book: "2 Nefi",
    chapter: 18,
    narrator: "Paolo Conforte",
    narratorImageName: "PaoloConforte",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi18",
    isActiveBookmark: false,
    src: "assets/media/2Nefi18.mp3",
  },
  {
    uuid: 46,
    bookID: 3,
    book: "2 Nefi",
    chapter: 19,
    narrator: "Carmelo Persico",
    narratorImageName: "CarmeloPersico",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi19",
    isActiveBookmark: false,
    src: "assets/media/2Nefi19.mp3",
  },
  {
    uuid: 47,
    bookID: 3,
    book: "2 Nefi",
    chapter: 20,
    narrator: "Gaia Pappalardo",
    narratorImageName: "GaiaPappalardo",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi20",
    isActiveBookmark: false,
    src: "assets/media/2Nefi20.mp3",
  },
  {
    uuid: 48,
    bookID: 3,
    book: "2 Nefi",
    chapter: 21,
    narrator: "Alessandro Cusumano",
    narratorImageName: "AlessandroCusumano",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi21",
    isActiveBookmark: false,
    src: "assets/media/2Nefi21.mp3",
  },
  {
    uuid: 49,
    bookID: 3,
    book: "2 Nefi",
    chapter: 22,
    narrator: "Andrea Cusumano",
    narratorImageName: "AndreaCusumano",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi22",
    isActiveBookmark: false,
    src: "assets/media/2Nefi22.mp3",
  },
  {
    uuid: 50,
    bookID: 3,
    book: "2 Nefi",
    chapter: 23,
    narrator: "Livia Rosa",
    narratorImageName: "LiviaRosa",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi23",
    isActiveBookmark: false,
    src: "assets/media/2Nefi23.mp3",
  },
  {
    uuid: 51,
    bookID: 3,
    book: "2 Nefi",
    chapter: 24,
    narrator: "Francesco Mannino",
    narratorImageName: "FrancescoMannino",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi24",
    isActiveBookmark: false,
    src: "assets/media/2Nefi24.mp3",
  },
  {
    uuid: 52,
    bookID: 3,
    book: "2 Nefi",
    chapter: 25,
    narrator: "Letizia Furia",
    narratorImageName: "LetiziaFuria",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi25",
    isActiveBookmark: false,
    src: "assets/media/2Nefi25.mp3",
  },
  {
    uuid: 53,
    bookID: 3,
    book: "2 Nefi",
    chapter: 26,
    narrator: "Noemi Tonon",
    narratorImageName: "NoemiTonon",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi26",
    isActiveBookmark: false,
    src: "assets/media/2Nefi26.mp3",
  },
  {
    uuid: 54,
    bookID: 3,
    book: "2 Nefi",
    chapter: 27,
    narrator: "Emanuel Tribaudino",
    narratorImageName: "EmanuelTribaudino",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi27",
    isActiveBookmark: false,
    src: "assets/media/2Nefi27.mp3",
  },
  {
    uuid: 55,
    bookID: 3,
    book: "2 Nefi",
    chapter: 28,
    narrator: "Anna Maria Maniscalco",
    narratorImageName: "AnnaMariaManiscalco",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi28",
    isActiveBookmark: false,
    src: "assets/media/2Nefi28.mp3",
  },
  {
    uuid: 56,
    bookID: 3,
    book: "2 Nefi",
    chapter: 29,
    narrator: "Olimpia Diodato",
    narratorImageName: "OlimpiaDiodato",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi29",
    isActiveBookmark: false,
    src: "assets/media/2Nefi29.mp3",
  },
  {
    uuid: 57,
    bookID: 3,
    book: "2 Nefi",
    chapter: 30,
    narrator: "Giulia  Diodato",
    narratorImageName: "GiuliaDiodato",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi30",
    isActiveBookmark: false,
    src: "assets/media/2Nefi30.mp3",
  },
  {
    uuid: 58,
    bookID: 3,
    book: "2 Nefi",
    chapter: 31,
    narrator: "Thomas Tonon",
    narratorImageName: "ThomasTonon",
    chapterImageName: "2Nephi31",
    audioFileName: "2Nefi31",
    isActiveBookmark: false,
    src: "assets/media/2Nefi31.mp3",
  },
  {
    uuid: 59,
    bookID: 3,
    book: "2 Nefi",
    chapter: 32,
    narrator: "Morgan Tonon",
    narratorImageName: "MorganTonon",
    chapterImageName: "2Nephi32",
    audioFileName: "2Nefi32",
    isActiveBookmark: false,
    src: "assets/media/2Nefi32.mp3",
  },
  {
    uuid: 60,
    bookID: 3,
    book: "2 Nefi",
    chapter: 33,
    narrator: "Bruno Diodato",
    narratorImageName: "BrunoDiodato",
    chapterImageName: "BOMpic",
    audioFileName: "2Nefi33",
    isActiveBookmark: false,
    src: "assets/media/2Nefi33.mp3",
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