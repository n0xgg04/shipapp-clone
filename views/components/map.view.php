<div class="map-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 style="color: #e4002b;" class="mb-4">Bưu cục J&T Express</h3>
                        <div class="mb-3">
                            <select class="form-select" id="city">
                                <option selected>Chọn tỉnh/Thành phố</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="district">
                                <option selected>Chọn Quận/huyện</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow h-100">
                    <div class="card-body p-0">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4241674197156!2d106.69765157465353!3d10.778789989376753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a9d8d1bb3%3A0xc2a933c0dfe8f488!2zSiZUIEV4cHJlc3MgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710400631099!5m2!1svi!2s"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('mapData', () => ({
        cities: [],
        districts: [],
        selectedCity: '',
        selectedDistrict: '',
        
        async init() {
            const response = await fetch('https://provinces.open-api.vn/api/p/');
            this.cities = await response.json();
        },
        
        async updateDistricts() {
            if (!this.selectedCity) return;
            const response = await fetch(`https://provinces.open-api.vn/api/p/${this.selectedCity}?depth=2`);
            const data = await response.json();
            this.districts = data.districts;
        }
    }));
});
</script> 