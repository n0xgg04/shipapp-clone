<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&T Express - Quét QR Gửi Hàng</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?= $this->section('styles') ?>
    <?= $this->show() ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <?= $this->put('components.topbar') ?>

    <main x-data="{ showQRCode: false, activeTab: 'tracking' }">
        <?= $this->get('content') ?>
    </main>

    <!-- Floating Contact Buttons -->
    <div class="floating-contacts position-fixed">
        <a href="https://zalo.me/jtexpress" class="btn btn-light rounded-circle mb-2 shadow zalo-btn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo" width="24" height="24">
        </a>
        <a href="tel:19001088" class="btn btn-danger rounded-circle shadow">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?= $this->section('scripts') ?>
    <?= $this->show() ?>
</body>
</html> 