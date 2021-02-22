let fadetarget  = document.querySelector(".loading")

    function show_loading() {
        fadetarget.style.display = "block";
        fadetarget.style.opacity = 1;

        let fadeeffect  = setInterval (() => {
            if (!fadetarget.style.opacity) {
                fadetarget.style.opacity = 1;
            }
            if (fadetarget.style.opacity > 0) {
                fadetarget.style.opacity -= 0.5;
            } else {
                clearInterval();
                fadetarget.style.display = "none";
            }
        },100)
    }

    function hide_loading() {
        let fadeeffect  = setInterval (() => {
            if (!fadetarget.style.opacity) {
                fadetarget.style.opacity = 1;
            }
            if (fadetarget.style.opacity > 0) {
                fadetarget.style.opacity -= 0.5;
            } else {
                clearInterval();
                fadetarget.style.display = "none";
            }
        },100)
    }