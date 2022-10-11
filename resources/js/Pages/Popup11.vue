<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi29',$page.props.auth.user)">29</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('3Nefi30',$page.props.auth.user)">30</button>
    
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
    uuid: 180,
    bookID: 12,
    book: "3 Nefi",
    chapter: 1,
    narrator: "Daniele Lui",
    narratorImageName: "DanieleLui",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi1",
    isActiveBookmark: false,
    src: "assets/media/3Nefi1.mp3",
  },
  {
    uuid: 181,
    bookID: 12,
    book: "3 Nefi",
    chapter: 2,
    narrator: "Giuseppe Viglietta",
    narratorImageName: "GiuseppeViglietta",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi2",
    isActiveBookmark: false,
    src: "assets/media/3Nefi2.mp3",
  },
  {
    uuid: 182,
    bookID: 12,
    book: "3 Nefi",
    chapter: 3,
    narrator: "Antonio Murgia",
    narratorImageName: "AntonioMurgia",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi3",
    isActiveBookmark: false,
    src: "assets/media/3Nefi3.mp3",
  },
  {
    uuid: 183,
    bookID: 12,
    book: "3 Nefi",
    chapter: 4,
    narrator: "Ester Tonon",
    narratorImageName: "EsterTonon",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi4",
    isActiveBookmark: false,
    src: "assets/media/3Nefi4.mp3",
  },
  {
    uuid: 184,
    bookID: 12,
    book: "3 Nefi",
    chapter: 5,
    narrator: "Mario Maltesi",
    narratorImageName: "MarioMaltesi",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi5",
    isActiveBookmark: false,
    src: "assets/media/3Nefi5.mp3",
  },
  {
    uuid: 185,
    bookID: 12,
    book: "3 Nefi",
    chapter: 6,
    narrator: "Tommaso Cardullo",
    narratorImageName: "TommasoCardullo",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi6",
    isActiveBookmark: false,
    src: "assets/media/3Nefi6.mp3",
  },
  {
    uuid: 186,
    bookID: 12,
    book: "3 Nefi",
    chapter: 7,
    narrator: "Paola Battistini",
    narratorImageName: "PaolaBattistini",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi7",
    isActiveBookmark: false,
    src: "assets/media/3Nefi7.mp3",
  },
  {
    uuid: 187,
    bookID: 12,
    book: "3 Nefi",
    chapter: 8,
    narrator: "Nicola Scarola",
    narratorImageName: "NicolaScarola",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi8",
    isActiveBookmark: false,
    src: "assets/media/3Nefi8.mp3",
  },
  {
    uuid: 188,
    bookID: 12,
    book: "3 Nefi",
    chapter: 9,
    narrator: "Carlo Battistini",
    narratorImageName: "CarloBattistini",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi9",
    isActiveBookmark: false,
    src: "assets/media/3Nefi9.mp3",
  },
  {
    uuid: 189,
    bookID: 12,
    book: "3 Nefi",
    chapter: 10,
    narrator: "Ivana Cocco",
    narratorImageName: "IvanaCocco",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi10",
    isActiveBookmark: false,
    src: "assets/media/3Nefi10.mp3",
  },
  {
    uuid: 190,
    bookID: 12,
    book: "3 Nefi",
    chapter: 11,
    narrator: "Antonietta Luvarà",
    narratorImageName: "AntoniettaLuvarà",
    chapterImageName: "3Nephi11",
    audioFileName: "3Nefi11",
    isActiveBookmark: false,
    src: "assets/media/3Nefi11.mp3",
  },
  {
    uuid: 191,
    bookID: 12,
    book: "3 Nefi",
    chapter: 12,
    narrator: "Stefano Pace",
    narratorImageName: "StefanoPace",
    chapterImageName: "3Nephi12",
    audioFileName: "3Nefi12",
    isActiveBookmark: false,
    src: "assets/media/3Nefi12.mp3",
  },
  {
    uuid: 192,
    bookID: 12,
    book: "3 Nefi",
    chapter: 13,
    narrator: "Fernando Curci",
    narratorImageName: "FernandoCurci",
    chapterImageName: "3Nephi13",
    audioFileName: "3Nefi13",
    isActiveBookmark: false,
    src: "assets/media/3Nefi13.mp3",
  },
  {
    uuid: 193,
    bookID: 12,
    book: "3 Nefi",
    chapter: 14,
    narrator: "Ciro Cangelosi",
    narratorImageName: "CiroCangelosi",
    chapterImageName: "3Nephi14",
    audioFileName: "3Nefi14",
    isActiveBookmark: false,
    src: "assets/media/3Nefi14.mp3",
  },
  {
    uuid: 194,
    bookID: 12,
    book: "3 Nefi",
    chapter: 15,
    narrator: "Massimiliano Carrus",
    narratorImageName: "MassimilianoCarrus",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi15",
    isActiveBookmark: false,
    src: "assets/media/3Nefi15.mp3",
  },
  {
    uuid: 195,
    bookID: 12,
    book: "3 Nefi",
    chapter: 16,
    narrator: "Mirella Corvasce",
    narratorImageName: "MirellaCorvasce",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi16",
    isActiveBookmark: false,
    src: "assets/media/3Nefi16.mp3",
  },
  {
    uuid: 196,
    bookID: 12,
    book: "3 Nefi",
    chapter: 17,
    narrator: "Guerrino Rotelli",
    narratorImageName: "GuerrinoRotelli",
    chapterImageName: "3Nephi17",
    audioFileName: "3Nefi17",
    isActiveBookmark: false,
    src: "assets/media/3Nefi17.mp3",
  },
  {
    uuid: 197,
    bookID: 12,
    book: "3 Nefi",
    chapter: 18,
    narrator: "Alessio Giolitto",
    narratorImageName: "AlessioGiolitto",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi18",
    isActiveBookmark: false,
    src: "assets/media/3Nefi18.mp3",
  },
  {
    uuid: 198,
    bookID: 12,
    book: "3 Nefi",
    chapter: 19,
    narrator: "Emanuele Carrus",
    narratorImageName: "EmanueleCarrus",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi19",
    isActiveBookmark: false,
    src: "assets/media/3Nefi19.mp3",
  },
  {
    uuid: 199,
    bookID: 12,
    book: "3 Nefi",
    chapter: 20,
    narrator: "Michol Lo Coco",
    narratorImageName: "MicholLoCoco",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi20",
    isActiveBookmark: false,
    src: "assets/media/3Nefi20.mp3",
  },
  {
    uuid: 200,
    bookID: 12,
    book: "3 Nefi",
    chapter: 21,
    narrator: "Sergio Giolitto",
    narratorImageName: "SergioGiolitto",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi21",
    isActiveBookmark: false,
    src: "assets/media/3Nefi21.mp3",
  },
  {
    uuid: 201,
    bookID: 12,
    book: "3 Nefi",
    chapter: 22,
    narrator: "Santina Rotelli",
    narratorImageName: "SantinaRotelli",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi22",
    isActiveBookmark: false,
    src: "assets/media/3Nefi22.mp3",
  },
  {
    uuid: 202,
    bookID: 12,
    book: "3 Nefi",
    chapter: 23,
    narrator: "Marco Marinello",
    narratorImageName: "MarcoMarinello",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi23",
    isActiveBookmark: false,
    src: "assets/media/3Nefi23.mp3",
  },
  {
    uuid: 203,
    bookID: 12,
    book: "3 Nefi",
    chapter: 24,
    narrator: "Teodora Di Pietro",
    narratorImageName: "TeodoraDiPietro",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi24",
    isActiveBookmark: false,
    src: "assets/media/3Nefi24.mp3",
  },
  {
    uuid: 204,
    bookID: 12,
    book: "3 Nefi",
    chapter: 25,
    narrator: "Sara Marinello",
    narratorImageName: "SaraMarinello",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi25",
    isActiveBookmark: false,
    src: "assets/media/3Nefi25.mp3",
  },
  {
    uuid: 205,
    bookID: 12,
    book: "3 Nefi",
    chapter: 26,
    narrator: "Daniele Dicarolo",
    narratorImageName: "DanieleDicarolo",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi26",
    isActiveBookmark: false,
    src: "assets/media/3Nefi26.mp3",
  },
  {
    uuid: 206,
    bookID: 12,
    book: "3 Nefi",
    chapter: 27,
    narrator: "Emanuele Guidara",
    narratorImageName: "EmanueleGuidara",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi27",
    isActiveBookmark: false,
    src: "assets/media/3Nefi27.mp3",
  },
  {
    uuid: 207,
    bookID: 12,
    book: "3 Nefi",
    chapter: 28,
    narrator: "Airina Giolitto",
    narratorImageName: "AirinaGiolitto",
    chapterImageName: "3Nephi28",
    audioFileName: "3Nefi28",
    isActiveBookmark: false,
    src: "assets/media/3Nefi28.mp3",
  },
  {
    uuid: 208,
    bookID: 12,
    book: "3 Nefi",
    chapter: 29,
    narrator: "Maria Scarola",
    narratorImageName: "MariaScarola",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi29",
    isActiveBookmark: false,
    src: "assets/media/3Nefi29.mp3",
  },
  {
    uuid: 209,
    bookID: 12,
    book: "3 Nefi",
    chapter: 30,
    narrator: "Lorenzo Bertone",
    narratorImageName: "LorenzoBertone",
    chapterImageName: "BOMpic",
    audioFileName: "3Nefi30",
    isActiveBookmark: false,
    src: "assets/media/3Nefi30.mp3",
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