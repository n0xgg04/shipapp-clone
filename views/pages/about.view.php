<?= $this->put('layouts.master', [
    'title' => $title,
    'description' => $description,
    'content' => function() { ?>

<div class="about-page">
    <div class="container py-5">
        <h1 class="text-center mb-4">Về J&T Express</h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="https://jtexpress.vn/storage/app/uploads/public/627/5c4/91f/6275c491f1491096304084.jpg" alt="J&T Express Office" class="img-fluid rounded mb-4">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">Chúng tôi là ai?</h2>
                <p class="mb-4">J&T Express là doanh nghiệp chuyển phát nhanh dựa trên công nghệ và là công ty khởi nghiệp được định giá lớn nhất tại Indonesia. Chúng tôi cung cấp các giải pháp chuyển phát nhanh toàn diện, bao gồm các dịch vụ last-mile, vận chuyển hàng nặng, vận chuyển xuyên biên giới và các giải pháp chuỗi cung ứng cho khách hàng cá nhân và doanh nghiệp.</p>
                <h2 class="mb-3">Sứ mệnh của chúng tôi</h2>
                <p class="mb-4">Sứ mệnh của J&T Express là trở thành công ty logistics đáng tin cậy nhất trong khu vực bằng cách cung cấp dịch vụ chất lượng cao và giải pháp toàn diện cho khách hàng.</p>
                <h2 class="mb-3">Giá trị cốt lõi</h2>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Tập trung vào khách hàng</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Đổi mới và phát triển</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Chính trực và minh bạch</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Hiệu quả và chất lượng</li>
                </ul>
            </div>
        </div>
    </div>
    <?= $this->put('components.partners') ?>
</div>

<?php }]) ?> 