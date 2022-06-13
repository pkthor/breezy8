<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="En alta voce" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-3xl lg:text-xl text-gray-800 leading-tight">FAQ</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm lg:rounded-lg">
          <div class="p-6 bg-blue-300 border-b border-gray-200">
            <h1 class="font-semibold text-3xl lg:text-2xl text-black leading-tight mb-4">
              FAQ
            </h1>
            
            <h1 class="font-semibold text-2xl lg:text-xl text-black leading-tight m-auto">
              Perché devo effettuare il “sign in”?
            </h1>

            <p class="p-2 mb-2 text-xl lg:text-base">
              Si fa il “sign in” per ricordare il tuo luogo di lettura per la
              prossima volta che effettuerai il “sign in”. Le tue informazioni
              non verrano mai usate per altro se non per questo sito web. La tua
              email non sarà mai data a terze parti.
            </p>

            <h1 class="font-semibold text-2xl lg:text-xl text-black leading-tight m-auto">
              Come nasce questo sito?
              </h1>

            <p class="p-2 mb-2 text-xl lg:text-base">
              Nel conferenza generale di ottobre 2011, Anziano Richard G. Scott,
              un membro del Quorum dei Dodici Apostoli disse: Nel 1991 volli
              fare alla mia famiglia un regalo di Natale speciale. Scrissi nel
              mio diario come stavo realizzando questo desiderio: “Mercoledì, 18
              dicembre 1991, ore 12:38. Ho appena finito la registrazione audio
              del Libro di Mormon per la mia famiglia. È stata un’esperienza che
              ha accresciuto la mia testimonianza di quest’opera divina e ha
              rafforzato in me il desiderio di conoscerne meglio le pagine, per
              trarre dalle Scritture le verità utili al servizio che rendo al
              Signore. Amo questo libro. Attesto con tutta la mia anima che esso
              è vero e che è stato preparato per benedire il casato d’Israele e
              tutti coloro che ne fanno parte in tutto il mondo. Tutti coloro
              che ne studieranno il messaggio con umiltà e fede, credendo in
              Gesù Cristo, ne conosceranno la veridicità e troveranno un tesoro
              che li condurrà, in questa vita, a maggiore felicità, pace e
              successo. Testimonio, su tutto ciò che è sacro, che questo libro è
              vero”. 
            </p>
            <p class="p-2 mb-2 text-xl lg:text-base">
              Pochi anni dopo, i miei fratelli e le mie sorelle vollero
              fare la stessa cosa creando un’applicazione della nostra famiglia
              che legge il Libro di Mormon ai nostri figli e nipoti. Non appena
              completate le registrazioni, pensai che sarebbe stato magnifico
              chiedere ai membri italiani della chiesa di leggere ad alta voce
              l’intero Libro di Mormon. Questo progetto nacque alla fine del
              2019. Da allora ci sono state diverse rivisitazioni. Spero che
              possiate apprezzare quest’opera d’amore.
            </p>
            <img
              class="h-40 bg-blue-400 mx-auto"
              src="/assets/photos/ericloree.jpg"
              alt="Eric e Loree Thorderson"
            />
            <p class="mx-auto text-center">
              Eric e Loree Thorderson
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
