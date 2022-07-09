<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Mosia29',$page.props.auth.user)">29</button>
    
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
    uuid: 72,
    bookID: 9,
    book: "Mosia",
    chapter: 1,
    narrator: "Stefania Tonon",
    narratorImageName: "StefaniaTonon",
    chapterImageName: "Mosiah1",
    audioFileName: "Mosia1",
    isActiveBookmark: false,
    src: "assets/media/Mosia1.mp3",
  },
  {
    uuid: 73,
    bookID: 9,
    book: "Mosia",
    chapter: 2,
    narrator: "Francesca Di Ruscio",
    narratorImageName: "FrancescaDiRuscio",
    chapterImageName: "Mosiah2",
    audioFileName: "Mosia2",
    isActiveBookmark: false,
    src: "assets/media/Mosia2.mp3",
  },
  {
    uuid: 74,
    bookID: 9,
    book: "Mosia",
    chapter: 3,
    narrator: "Daniele Dicarolo",
    narratorImageName: "DanieleDicarolo",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia3",
    isActiveBookmark: false,
    src: "assets/media/Mosia3.mp3",
  },
  {
    uuid: 75,
    bookID: 9,
    book: "Mosia",
    chapter: 4,
    narrator: "Francesca Lui",
    narratorImageName: "FrancescaLui",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia4",
    isActiveBookmark: false,
    src: "assets/media/Mosia4.mp3",
  },
  {
    uuid: 76,
    bookID: 9,
    book: "Mosia",
    chapter: 5,
    narrator: "Franco Mangifesta",
    narratorImageName: "FrancoMangifesta",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia5",
    isActiveBookmark: false,
    src: "assets/media/Mosia5.mp3",
  },
  {
    uuid: 77,
    bookID: 9,
    book: "Mosia",
    chapter: 6,
    narrator: "Nicolò Rodio",
    narratorImageName: "NicoloRodio",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia6",
    isActiveBookmark: false,
    src: "assets/media/Mosia6.mp3",
  },
  {
    uuid: 78,
    bookID: 9,
    book: "Mosia",
    chapter: 7,
    narrator: "Alexandra Pavesi",
    narratorImageName: "AlexandraPavesi",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia7",
    isActiveBookmark: false,
    src: "assets/media/Mosia7.mp3",
  },
  {
    uuid: 79,
    bookID: 9,
    book: "Mosia",
    chapter: 8,
    narrator: "Silvio Pirondini",
    narratorImageName: "SilvioPirondini",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia8",
    isActiveBookmark: false,
    src: "assets/media/Mosia8.mp3",
  },
  {
    uuid: 80,
    bookID: 9,
    book: "Mosia",
    chapter: 9,
    narrator: "Vittorio Salemi",
    narratorImageName: "VittorioSalemi",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia9",
    isActiveBookmark: false,
    src: "assets/media/Mosia9.mp3",
  },
  {
    uuid: 81,
    bookID: 9,
    book: "Mosia",
    chapter: 10,
    narrator: "Donata Pirondini",
    narratorImageName: "DonataPirondini",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia10",
    isActiveBookmark: false,
    src: "assets/media/Mosia10.mp3",
  },
  {
    uuid: 82,
    bookID: 9,
    book: "Mosia",
    chapter: 11,
    narrator: "Michele Argenti",
    narratorImageName: "MicheleArgenti",
    chapterImageName: "Mosiah11",
    audioFileName: "Mosia11",
    isActiveBookmark: false,
    src: "assets/media/Mosia11.mp3",
  },
  {
    uuid: 83,
    bookID: 9,
    book: "Mosia",
    chapter: 12,
    narrator: "Daniele Lui",
    narratorImageName: "DanieleLui",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia12",
    isActiveBookmark: false,
    src: "assets/media/Mosia12.mp3",
  },
  {
    uuid: 84,
    bookID: 9,
    book: "Mosia",
    chapter: 13,
    narrator: "Anna Maria Zilli",
    narratorImageName: "AnnaMariaZilli",
    chapterImageName: "Mosiah13",
    audioFileName: "Mosia13",
    isActiveBookmark: false,
    src: "assets/media/Mosia13.mp3",
  },
  {
    uuid: 85,
    bookID: 9,
    book: "Mosia",
    chapter: 14,
    narrator: "Gabriele Teodosi",
    narratorImageName: "GabrieleTeodosi",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia14",
    isActiveBookmark: false,
    src: "assets/media/Mosia14.mp3",
  },
  {
    uuid: 86,
    bookID: 9,
    book: "Mosia",
    chapter: 15,
    narrator: "Buonfiglio Petroni",
    narratorImageName: "BuonfiglioPetroni",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia15",
    isActiveBookmark: false,
    src: "assets/media/Mosia15.mp3",
  },
  {
    uuid: 87,
    bookID: 9,
    book: "Mosia",
    chapter: 16,
    narrator: "Cristiana Baldassi",
    narratorImageName: "CristianaBaldassi",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia16",
    isActiveBookmark: false,
    src: "assets/media/Mosia16.mp3",
  },
  {
    uuid: 88,
    bookID: 9,
    book: "Mosia",
    chapter: 17,
    narrator: "Nicoletta Pagnani",
    narratorImageName: "NicolettaPagnani",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia17",
    isActiveBookmark: false,
    src: "assets/media/Mosia17.mp3",
  },
  {
    uuid: 89,
    bookID: 9,
    book: "Mosia",
    chapter: 18,
    narrator: "Daniele Casella",
    narratorImageName: "DanieleCasella",
    chapterImageName: "Mosiah18",
    audioFileName: "Mosia18",
    isActiveBookmark: false,
    src: "assets/media/Mosia18.mp3",
  },
  {
    uuid: 90,
    bookID: 9,
    book: "Mosia",
    chapter: 19,
    narrator: "Roberta Marinello",
    narratorImageName: "RobertaMarinello",
    chapterImageName: "Mosiah19",
    audioFileName: "Mosia19",
    isActiveBookmark: false,
    src: "assets/media/Mosia19.mp3",
  },
  {
    uuid: 91,
    bookID: 9,
    book: "Mosia",
    chapter: 20,
    narrator: "Alessandra Balestra Sorgiacomo",
    narratorImageName: "AlessandraBalestraSorgiacomo",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia20",
    isActiveBookmark: false,
    src: "assets/media/Mosia20.mp3",
  },
  {
    uuid: 92,
    bookID: 9,
    book: "Mosia",
    chapter: 21,
    narrator: "Ugo Perego",
    narratorImageName: "UgoPerego",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia21",
    isActiveBookmark: false,
    src: "assets/media/Mosia21.mp3",
  },
  {
    uuid: 93,
    bookID: 9,
    book: "Mosia",
    chapter: 22,
    narrator: "Giuliana Dal Zotto",
    narratorImageName: "GiulianaDalZotto",
    chapterImageName: "Mosiah22",
    audioFileName: "Mosia22",
    isActiveBookmark: false,
    src: "assets/media/Mosia22.mp3",
  },
  {
    uuid: 94,
    bookID: 9,
    book: "Mosia",
    chapter: 23,
    narrator: "Valter Buono",
    narratorImageName: "ValterBuono",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia23",
    isActiveBookmark: false,
    src: "assets/media/Mosia23.mp3",
  },
  {
    uuid: 95,
    bookID: 9,
    book: "Mosia",
    chapter: 24,
    narrator: "Fernando Curci",
    narratorImageName: "FernandoCurci",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia24",
    isActiveBookmark: false,
    src: "assets/media/Mosia24.mp3",
  },
  {
    uuid: 96,
    bookID: 9,
    book: "Mosia",
    chapter: 25,
    narrator: "Tranquillo Dal Zotto",
    narratorImageName: "TranquilloDalZotto",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia25",
    isActiveBookmark: false,
    src: "assets/media/Mosia25.mp3",
  },
  {
    uuid: 97,
    bookID: 9,
    book: "Mosia",
    chapter: 26,
    narrator: "Elisabetta Calabrese",
    narratorImageName: "ElisabettaCalabrese",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia26",
    isActiveBookmark: false,
    src: "assets/media/Mosia26.mp3",
  },
  {
    uuid: 98,
    bookID: 9,
    book: "Mosia",
    chapter: 27,
    narrator: "Giorgia Castorina",
    narratorImageName: "GiorgiaCastorina",
    chapterImageName: "Mosiah27",
    audioFileName: "Mosia27",
    isActiveBookmark: false,
    src: "assets/media/Mosia27.mp3",
  },
  {
    uuid: 99,
    bookID: 9,
    book: "Mosia",
    chapter: 28,
    narrator: "Umberto Pagnani",
    narratorImageName: "UmbertoPagnani",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia28",
    isActiveBookmark: false,
    src: "assets/media/Mosia28.mp3",
  },
  {
    uuid: 100,
    bookID: 9,
    book: "Mosia",
    chapter: 29,
    narrator: "Serena Teodosi",
    narratorImageName: "SerenaTeodosi",
    chapterImageName: "BOMpic",
    audioFileName: "Mosia29",
    isActiveBookmark: false,
    src: "assets/media/Mosia29.mp3",
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