// Untuk Alert

$(document).ready(function() {
    // Menampilkan alert jika parameter 'error' ada di URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
        $('.alert').removeClass('none').addClass('show');
        $('.msg').text('Username atau password salah!');
    }

    // Menghapus parameter 'error' dari URL tanpa refresh halaman
    const urlWithoutError = window.location.href.replace(/(\?|\&)error=true/, '');
    if (window.history.replaceState) {
        window.history.replaceState({}, document.title, urlWithoutError);
    }

    // Fungsi untuk menutup alert
    $('.close-btn').click(function () {
        $('.alert').removeClass("show").addClass("hide");
    });
});