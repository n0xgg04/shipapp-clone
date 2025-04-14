<?php $this->extend('layouts.master') ?>

<?php $this->section('content') ?>

<?= $this->put('components.banner') ?>

<div class="tracking-section py-5">
    <div class="container">
        <div class="tracking-card bg-white rounded-4 shadow-sm p-4">
            <div class="tracking-tabs mb-4">
                <div class="row g-2">
                    <div class="col-4">
                        <button class="btn btn-light w-100 py-3 rounded-3" 
                                :class="{ 'active': activeTab === 'tracking' }"
                                @click="activeTab = 'tracking'">
                            Tra cứu đơn hàng
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-light w-100 py-3 rounded-3"
                                :class="{ 'active': activeTab === 'post' }"
                                @click="activeTab = 'post'">
                            Tra cứu bưu cục
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-light w-100 py-3 rounded-3"
                                :class="{ 'active': activeTab === 'price' }"
                                @click="activeTab = 'price'">
                            Bảng giá
                        </button>
                    </div>
                </div>
            </div>
            <div class="tracking-content">
                <div x-show="activeTab === 'tracking'" class="tracking-form">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-0" 
                               placeholder="Nhập mã vận đơn của bạn (cách nhau bởi dấu phẩy), tối đa 10 vận đơn.">
                        <button class="btn btn-danger px-5">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->put('components.nations') ?>

<?= $this->put('components.about-us') ?>

<?= $this->put('components.all-services') ?>
<?= $this->put('components.install-app') ?>

<!-- Awards Section -->
<?= $this->put('components.awards') ?>

<!-- Partners Section -->
<?= $this->put('components.partners') ?>

<!-- Footer -->
<?= $this->put('components.footer') ?>

<!-- Floating QR Code -->
<div class="floating-qr position-fixed">
    <img src="/assets/images/qr-code.png" alt="QR Code" width="100" 
         x-show="!showQRCode"
         @click="showQRCode = true"
         style="cursor: pointer;">
</div>

<!-- QR Code Modal -->
<div class="modal fade" x-show="showQRCode" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" @click="showQRCode = false"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/assets/images/qr-code-large.png" alt="QR Code Large" class="img-fluid">
                <p class="mt-3">Quét mã QR để gửi hàng</p>
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>