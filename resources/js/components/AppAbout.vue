<template>
    <div>

        <AppHomeButton class="h-2/6" color-reversed="true" v-bind:description="buttonDescription" text="About" />
        <!--    first  -->
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center about-text">
            Preserving Tattooed Skin After Death
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
                <div style="z-index: 3;" class="antiqueLegacy bg-black pl-4 p-5 rounded-r-3xl about-description text-white child">
                    {{ firstEdit.description }}
                </div>
                <div style="z-index: 2;" @Click="isActive = !isActive" :class="{'slide-right': isActive }"  class="bg-transparent ml-4 child other-child w-full h-full">
                    <img style="object-fit: fill" class="img-background" src="/images/drm.jpg" alt="drm">

                </div>
            <div @Click="secIsActive = !secIsActive" :class="{'slide-right': secIsActive }" class="ml-4 child w-full h-full last-child">
                <img style="object-fit: fill" class="img-background" src="/images/tattoo-time-vol-4-dr-fukushi-2.jpg" alt="tattoo-time">
            </div>
        </div>
        <div class="h-8 w-full bg-black"></div>
    </div>
    <!--    second  -->-
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center about-text">
            Archiving, Scanning, Digititalization
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
        <div style="z-index: 3;" class="antiqueLegacy bg-black pl-4 p-5 rounded-r-3xl about-description text-white child">
            {{ secondEdit.description }}
        </div>
        <div style="z-index: 2;"  @Click="thirdIsActive = !thirdIsActive" :class="{'slide-right': thirdIsActive }" class="bg-transparent ml-4 child other-child w-full h-full">
            <img style="object-fit: fill" class="img-background" src="/images/metashape.jpg" alt="metashape">
        </div>
    </div>
    <div class="h-8 w-full bg-black"></div>

<!--    third  -->
    <div class="divide-gray-900 divide-y-[2px]">
        <div style="font-family: 'antiqueLegacy', sans-serif;" class="leading-none divide-gray-900 divide-y-[2px] text-center about-text">
            Open Access For A Cultural Heritage
        </div>
        <div>
            <br>
        </div>
        <div></div>
    </div>
    <div style="font-family: 'antiqueLegacy', sans-serif;" class="superpose">
        <div style="z-index: 3;" class="bg-black pl-4 p-5 rounded-r-3xl about-description text-white child">
            {{ thirdEdit.description }}
        </div>
        <div style="z-index: 2;" @Click="isActive = !isActive" :class="{'slide-right': isActive }" class="pl-4 pt-3 rounded-3xl text-xl pr-8 child other-child">

        </div>
        <div @Click="secIsActive = !secIsActive" :class="{'slide-right': secIsActive }" class="pl-4 pt-3 rounded-3xl text-xl rounded-3xl child last-child">
        </div>
    </div>
    <div class="h-8 w-full bg-black"></div>

    <div>
        <div class="bg-black border-b-2 border-white">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton :description="first" :text="first.text" :secondText="first.description" :colorReversed="true" />
        <div class="text-cols border-b-2 border-black">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton :description="second" :text="second.text" :colorReversed="false" />
        <div class="border-t-2 border-black bg-white">
            <div class="h-6"><br></div>
        </div>
        <div class="border-y-2 bg-black">
            <div class="h-6"><br></div>
        </div>
        <AppAboutButton class="credits" :description="third" :text="third.text" :colorReversed="true" />
    </div>
</template>

<script>
import AppAboutButton from "./AppAboutButton";
import AppHomeButton from "./AppHomeButton";
import Button from "./Button";
export default {
    name: "app-about",
    components: { AppAboutButton, AppHomeButton, Button },
    data() {
        return {
            isActive: false,
            secIsActive: false,
            thirdIsActive: false
        }
    },
    setup: () => ({
        first: {
            title: '',
            text: "Skinner Project is a platform allowing tattoo artists from all over the world to present their works in 3D using photogrammetry technology. Facing a long-standing problem in the communication of tattoo artists, namely the classic photos, this platform offers a new innovative way to discover tattoos in three dimensions.",
            description : "This project began in March 2022 as part of Tanguy Morvan's practical bachelor's degree at HEAD (Haute École d'Art et de Design) in Geneva with the support of his brother Malow Morvan",
            des: '',
            service: '',
            counted: ''
        },
        second: {
            title: '',
            text: 'Born from the mix of passions (tattoos and digital design) of the graphic designer Tanguy Morvan, the Skinner Project finds its place in an experimental initiative but remains completely functional and can serve each artist who wishes it.',
            des: '',
            service: '',
            counted: ''
        },
        third: {
            title: 'Skinner Project © 2022',
            text: 'Don\'t hesitate to get in in touch to talk about this project and how you could be scanning your tattoos tomorrow.',
            des: 'contact@skinnerproject.com',
            service: 'Legal',
            counted: 'www.skinnerproject.com is property of Tanguy Morvan'
        },
        buttonDescription: {
            title: '',
            des: '',
            service: '',
            counted: ''
        },
        firstEdit: {
            description: "As mentioned in the title of the page, the conservation of tattoo and tattooed skin has been a challenge for previous generations. Some forward thinkers such as Dr. Masaichi Fukushi tried to answer this problem in the years 1930-40, in Japan. This doctor's goal was to collect and preserve the skins of tattooed Japanese. Originally, Japanese tattooing, also called \"Irezumi\" was a practice dedicated to the Yakuzas. Masaichi Fukushi was one of the precursors of this practice of tattoo conservation and some of his pieces are today exposed in a private collection at Tokyo University's Medical Pathology Museum.",
            title: 'Preserving Tattooed Skin After Death'
        },
        secondEdit : {
            description:
                'To preserve the tattoo and the works of art realized by tattoo artists around the globe turns out to be a complex and tedious task if we should use the method of Masaichi Fukushi. But today, thanks to the new techniques and the new digital production tools that we have at our disposal, it is now possible to archive and preserve these tattoos. Through photogrammetry (taking a picture of an object from all angles with a digital camera), we can digitize a tattoo in three dimensions and allow anyone to consult and discover it online. This platform aims to provide everyone with free access to numerous works of art made by artists of various reputations and from different backgrounds.',
            title: 'Archiving, Scanning, Digititalization'
        },
        thirdEdit: {
            description:
                'With the rise of social networks and especially Instagram, the visibility of tattoo art has grown exponentially. However, some problems arise when we talk about conservation, archiving and consultation of these tattoos (censorship of instagram towards genital parts, etc). Given the inherent materiality of the tattoo (ink in the skin, around a leg, an arm), photography remains a medium too limited for a complete conservation of the tattoo. This platform aims at answering these numerous problems thanks to new technologies (photogrammetry and 3D).',
            title: 'Preserving Tattooed Skin After Death'
        },
    })
}
</script>

<style scoped>

.img-background {
    border-radius: 20px;
    width: 100%;
    height: 100%;
}
.child {
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.other-child {
    z-index: 1;
    margin-left: 30px;
}
.last-child {
    z-index: 1;
    margin-left: 60px;
    background-color: transparent;
}

.slide-right {
	-webkit-animation: slide-right 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) forwards;
	        animation: slide-right 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) forwards;
}

</style>
