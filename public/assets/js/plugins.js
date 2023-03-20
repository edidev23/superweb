let origin = location.origin;

(document.querySelectorAll("[toast-list]") ||
    document.querySelectorAll("[data-choices]") ||
    document.querySelectorAll("[data-provider]")) &&
    (document.writeln(
        "<script type='text/javascript' src='" +
            origin +
            "assets/js/toastify-js'></script>"
    ),
    document.writeln(
        "<script type='text/javascript' src='" +
            origin +
            "assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>"
    ),
    document.writeln(
        "<script type='text/javascript' src='" +
            origin +
            "assets/libs/flatpickr/flatpickr.min.js'></script>"
    ));
