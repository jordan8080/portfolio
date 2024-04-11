    // Show the "Up to Top" button when scrolling down
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var scrollToTopButton = document.getElementById("scroll-to-top");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    // Scroll to the top when the button is clicked
    function scrollToTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }
