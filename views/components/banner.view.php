<div class="banner-section" x-data="{ 
    currentBanner: 0,
    banners: [
        '/assets/images/banners/banner-1.jpg',
        '/assets/images/banners/banner-2.jpg',
        '/assets/images/banners/banner-3.jpg'
    ],
    init() {
        setInterval(() => {
            this.currentBanner = (this.currentBanner + 1) % this.banners.length;
        }, 5000);
    }
}">
    <div class="container-fluid px-0 banner-container">
        <template x-for="(banner, index) in banners" :key="index">
            <div class="banner-slide" 
                 :class="{ 'active': currentBanner === index }"
                 :style="'background-image: url(' + banner + ')'">
            </div>
        </template>
        
        <!-- Banner Navigation -->
        <div class="banner-nav">
            <template x-for="(banner, index) in banners" :key="index">
                <button class="banner-dot" 
                        :class="{ 'active': currentBanner === index }"
                        @click="currentBanner = index">
                </button>
            </template>
        </div>
    </div>
</div> 