<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Giacobbe7',$page.props.auth.user)">7</button>
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
    uuid: 61,
    bookID: 4,
    book: "Giacobbe",
    chapter: 1,
    narrator: "Andrea Bertocchi",
    narratorImageName: "AndreaBertocchi",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe1",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe1.mp3",
  },
  {
    uuid: 62,
    bookID: 4,
    book: "Giacobbe",
    chapter: 2,
    narrator: "Giovanni Dal Pozzo",
    narratorImageName: "GiovanniDalPozzo",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe2",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe2.mp3",
  },
  {
    uuid: 63,
    bookID: 4,
    book: "Giacobbe",
    chapter: 3,
    narrator: "Francesco Rodio",
    narratorImageName: "FrancescoRodio",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe3",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe3.mp3",
  },
  {
    uuid: 64,
    bookID: 4,
    book: "Giacobbe",
    chapter: 4,
    narrator: "Silvia Rodio",
    narratorImageName: "SilviaRodio",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe4",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe4.mp3",
  },
  {
    uuid: 65,
    bookID: 4,
    book: "Giacobbe",
    chapter: 5,
    narrator: "Elisa Carrus Giolitto",
    narratorImageName: "ElisaCarrusGiolitto",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe5",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe5.mp3",
  },
  {
    uuid: 66,
    bookID: 4,
    book: "Giacobbe",
    chapter: 6,
    narrator: "Sara Sisto",
    narratorImageName: "SaraSisto",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe6",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe6.mp3",
  },
  {
    uuid: 67,
    bookID: 4,
    book: "Giacobbe",
    chapter: 7,
    narrator: "Anna Maria Zilli",
    narratorImageName: "AnnaMariaZilli",
    chapterImageName: "BOMpic",
    audioFileName: "Giacobbe7",
    isActiveBookmark: false,
    src: "assets/media/Giacobbe7.mp3",
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