var brandList = document.querySelector('.brand-list');
var isDown = false;
var startX;
var scrollLeft;

brandList.addEventListener('mousedown', function (e) {
    e.preventDefault();
    startX = e.clientX;
    scrollLeft = brandList.scrollLeft;
    isDown = true;
});

brandList.addEventListener('mouseleave', function () {
    isDown = false;
});

brandList.addEventListener('mouseup', function () {
    isDown = false;
});

brandList.addEventListener('mousemove', function (e) {
    if (!isDown) return;
    e.preventDefault();
    var x = e.clientX;
    var walk = (x - startX) * 0.5; // Kaydırma hızını ayarlamak için çarpan değeri
    brandList.scrollLeft = scrollLeft - walk;
});


