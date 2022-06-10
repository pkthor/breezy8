<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black font-bold rounded h-10 w-10 hover:text-xl" @click="selectReaderForUser('1Nefi22',$page.props.auth.user)">22</button>
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
    uuid: 6,
    bookID: 2,
    book: "1 Nefi",
    chapter: 1,
    narrator: "Giacomo Armillei",
    narratorImageName: "GiacomoArmillei",
    chapterImageName: "1Nephi1",
    audioFileName: "1Nefi1",
    isActiveBookmark: false,
    src: "assets/media/1Nefi1.mp3",
  },
  {
    uuid: 7,
    bookID: 2,
    book: "1 Nefi",
    chapter: 2,
    narrator: "Emanuele Cascone",
    narratorImageName: "EmanueleCascone",
    chapterImageName: "1Nephi2",
    audioFileName: "1Nefi2",
    isActiveBookmark: false,
    src: "assets/media/1Nefi2.mp3",
  },
  {
    uuid: 8,
    bookID: 2,
    book: "1 Nefi",
    chapter: 3,
    narrator: "Simon Bellini",
    narratorImageName: "SimonBellini",
    chapterImageName: "1Nephi3",
    audioFileName: "1Nefi3",
    isActiveBookmark: false,
    src: "assets/media/1Nefi3.mp3",
  },
  {
    uuid: 9,
    bookID: 2,
    book: "1 Nefi",
    chapter: 4,
    narrator: "Giancarlo Giorgino",
    narratorImageName: "GiancarloGiorgino",
    chapterImageName: "1Nephi4",
    audioFileName: "1Nefi4",
    isActiveBookmark: false,
    src: "assets/media/1Nefi4.mp3",
  },
  {
    uuid: 10,
    bookID: 2,
    book: "1 Nefi",
    chapter: 5,
    narrator: "Daniele Menis",
    narratorImageName: "DanieleMenis",
    chapterImageName: "1Nephi5",
    audioFileName: "1Nefi5",
    isActiveBookmark: false,
    src: "assets/media/1Nefi5.mp3",
  },
  {
    uuid: 11,
    bookID: 2,
    book: "1 Nefi",
    chapter: 6,
    narrator: "Enrico Grieco",
    narratorImageName: "EnricoGreico",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi6",
    isActiveBookmark: false,
    src: "assets/media/1Nefi6.mp3",
  },
  {
    uuid: 12,
    bookID: 2,
    book: "1 Nefi",
    chapter: 7,
    narrator: "Camilla Botta",
    narratorImageName: "CamillaBotta",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi7",
    isActiveBookmark: false,
    src: "assets/media/1Nefi7.mp3",
  },
  {
    uuid: 13,
    bookID: 2,
    book: "1 Nefi",
    chapter: 8,
    narrator: "Cristina Perricone",
    narratorImageName: "CristinaPerricone",
    chapterImageName: "1Nephi8",
    audioFileName: "1Nefi8",
    isActiveBookmark: false,
    src: "assets/media/1Nefi8.mp3",
  },
  {
    uuid: 14,
    bookID: 2,
    book: "1 Nefi",
    chapter: 9,
    narrator: "Giorgio Cascone",
    narratorImageName: "GiorgioCascone",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi9",
    isActiveBookmark: false,
    src: "assets/media/1Nefi9.mp3",
  },
  {
    uuid: 15,
    bookID: 2,
    book: "1 Nefi",
    chapter: 10,
    narrator: "Giuseppe Armenise",
    narratorImageName: "GiuseppeArmenise",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi10",
    isActiveBookmark: false,
    src: "assets/media/1Nefi10.mp3",
  },
  {
    uuid: 16,
    bookID: 2,
    book: "1 Nefi",
    chapter: 11,
    narrator: "Alberto Malara",
    narratorImageName: "AlbertoMalara",
    chapterImageName: "1Nephi11",
    audioFileName: "1Nefi11",
    isActiveBookmark: false,
    src: "assets/media/1Nefi11.mp3",
  },
  {
    uuid: 17,
    bookID: 2,
    book: "1 Nefi",
    chapter: 12,
    narrator: "Maximiliano Virzo",
    narratorImageName: "MaximilianoVirzo",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi12",
    isActiveBookmark: false,
    src: "assets/media/1Nefi12.mp3",
  },
  {
    uuid: 18,
    bookID: 2,
    book: "1 Nefi",
    chapter: 13,
    narrator: "Maria Chiara Murgia",
    narratorImageName: "MariaMurgia",
    chapterImageName: "1Nephi13",
    audioFileName: "1Nefi13",
    isActiveBookmark: false,
    src: "assets/media/1Nefi13.mp3",
  },
  {
    uuid: 19,
    bookID: 2,
    book: "1 Nefi",
    chapter: 14,
    narrator: "Alessio Giolitto",
    narratorImageName: "AlessioGiolitto",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi14",
    isActiveBookmark: false,
    src: "assets/media/1Nefi14.mp3",
  },
  {
    uuid: 20,
    bookID: 2,
    book: "1 Nefi",
    chapter: 15,
    narrator: "Silvana Pulvirenti",
    narratorImageName: "SilvanaPulvirenti",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi15",
    isActiveBookmark: false,
    src: "assets/media/1Nefi15.mp3",
  },
  {
    uuid: 21,
    bookID: 2,
    book: "1 Nefi",
    chapter: 16,
    narrator: "Giunia Bressan",
    narratorImageName: "GiuniaBressan",
    chapterImageName: "1Nephi16",
    audioFileName: "1Nefi16",
    isActiveBookmark: false,
    src: "assets/media/1Nefi16.mp3",
  },
  {
    uuid: 22,
    bookID: 2,
    book: "1 Nefi",
    chapter: 17,
    narrator: "Eleonora Caravella",
    narratorImageName: "EleonoraCaravella",
    chapterImageName: "1Nephi17",
    audioFileName: "1Nefi17",
    isActiveBookmark: false,
    src: "assets/media/1Nefi17.mp3",
  },
  {
    uuid: 23,
    bookID: 2,
    book: "1 Nefi",
    chapter: 18,
    narrator: "Teresa Saieva",
    narratorImageName: "TeresaSaieva",
    chapterImageName: "1Nephi18",
    audioFileName: "1Nefi18",
    isActiveBookmark: false,
    src: "assets/media/1Nefi18.mp3",
  },
  {
    uuid: 24,
    bookID: 2,
    book: "1 Nefi",
    chapter: 19,
    narrator: "Eveline Gibilisco",
    narratorImageName: "EvelineGibilisco",
    chapterImageName: "1Nephi19",
    audioFileName: "1Nefi19",
    isActiveBookmark: false,
    src: "assets/media/1Nefi19.mp3",
  },
  {
    uuid: 25,
    bookID: 2,
    book: "1 Nefi",
    chapter: 20,
    narrator: "Marianna Pastano",
    narratorImageName: "MariannaPastano",
    chapterImageName: "1Nephi20",
    audioFileName: "1Nefi20",
    isActiveBookmark: false,
    src: "assets/media/1Nefi20.mp3",
  },
  {
    uuid: 26,
    bookID: 2,
    book: "1 Nefi",
    chapter: 21,
    narrator: "Rosi Zombra",
    narratorImageName: "RosiZombra",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi21",
    isActiveBookmark: false,
    src: "assets/media/1Nefi21.mp3",
  },
  {
    uuid: 27,
    bookID: 2,
    book: "1 Nefi",
    chapter: 22,
    narrator: "Emily Cascone",
    narratorImageName: "EmilyCascone",
    chapterImageName: "BOMpic",
    audioFileName: "1Nefi22",
    isActiveBookmark: false,
    src: "assets/media/1Nefi22.mp3",
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