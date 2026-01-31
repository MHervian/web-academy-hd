$(document).ready(function () {
    // Toggle dropdown
    $("#langBtn").on("click", function (e) {
        e.stopPropagation();
        $("#langMenu").toggleClass("hidden");
    });

    // Klik item bahasa
    $(".lang-item").on("click", function () {
        const lang = $(this).data("lang");
        $("#currentLang").text(lang);
        $("#langMenu").addClass("hidden");
    });

    // Klik di luar dropdown → tutup
    $(document).on("click", function () {
        $("#langMenu").addClass("hidden");
    });
});
