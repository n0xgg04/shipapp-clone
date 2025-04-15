<div class="feedback-section py-5" style="background-color: #f8f9fa;" x-data="{
    form: {
        fullname: '',
        email: '',
        phone_number: '',
        message: ''
    },
    errors: {},
    loading: false,
    success: false,
    validateEmail(email) {
        return email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
    },
    validatePhone(phone) {
        return phone.match(/^[0-9]{10}$/);
    },
    validate() {
        this.errors = {};
        if (!this.form.fullname) this.errors.fullname = 'Vui lòng nhập họ tên';
        if (!this.form.email) this.errors.email = 'Vui lòng nhập email';
        else if (!this.validateEmail(this.form.email)) this.errors.email = 'Email không hợp lệ';
        if (!this.form.phone_number) this.errors.phone_number = 'Vui lòng nhập số điện thoại';
        else if (!this.validatePhone(this.form.phone_number)) this.errors.phone_number = 'Số điện thoại không hợp lệ';
        if (!this.form.message) this.errors.message = 'Vui lòng nhập nội dung';
        return Object.keys(this.errors).length === 0;
    },
    async submit() {
        if (!this.validate()) return;
        this.loading = true;
        try {
            const response = await fetch('/pages/api/feedback.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(this.form)
            });
            const data = await response.json();
            if (data.success) {
                this.success = true;
                this.form = {
                    fullname: '',
                    email: '',
                    phone_number: '',
                    message: ''
                };
            } else {
                alert(data.message);
            }
        } catch (error) {
            alert('Có lỗi xảy ra, vui lòng thử lại sau');
        }
        this.loading = false;
    }
}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3" style="color: #e4002b;">Góp ý cho J&T Express</h2>
                    <p class="text-muted">Mọi ý kiến đóng góp của bạn sẽ giúp chúng tôi cải thiện dịch vụ tốt hơn</p>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <template x-if="success">
                            <div class="alert alert-success text-center py-4">
                                <i class="fas fa-check-circle fa-3x mb-3" style="color: #28a745;"></i>
                                <h4 class="alert-heading">Cảm ơn bạn!</h4>
                                <p class="mb-0">Chúng tôi đã nhận được góp ý của bạn và sẽ phản hồi trong thời gian sớm nhất.</p>
                            </div>
                        </template>

                        <form @submit.prevent="submit" x-show="!success">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" x-model="form.fullname" :class="{'is-invalid': errors.fullname}" 
                                            placeholder="Nhập họ và tên của bạn">
                                        <div class="invalid-feedback" x-text="errors.fullname"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="tel" class="form-control" x-model="form.phone_number" :class="{'is-invalid': errors.phone_number}"
                                            placeholder="Nhập số điện thoại của bạn">
                                        <div class="invalid-feedback" x-text="errors.phone_number"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" x-model="form.email" :class="{'is-invalid': errors.email}"
                                        placeholder="Nhập địa chỉ email của bạn">
                                    <div class="invalid-feedback" x-text="errors.email"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group">
                                    <label class="form-label">Nội dung góp ý</label>
                                    <textarea class="form-control" x-model="form.message" :class="{'is-invalid': errors.message}" rows="5"
                                        placeholder="Nhập nội dung góp ý của bạn"></textarea>
                                    <div class="invalid-feedback" x-text="errors.message"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg px-5" 
                                    :disabled="loading"
                                    style="background-color: #e4002b; color: white;">
                                    <span x-show="loading" class="spinner-border spinner-border-sm me-2"></span>
                                    <span x-show="!loading">Gửi góp ý</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 