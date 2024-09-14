//Header
// Get the current URL
const currentURL = window.location.pathname;

// Function to set active class based on URL
function setActiveLink() {
  // Get all the anchor elements inside the nav
  const homeLink = document.getElementById("home-link");
  const aboutLink = document.getElementById("about-link");
  const servicesLink = document.getElementById("services-link");
  const blogsLink = document.getElementById("blogss-link");
  const careersLink = document.getElementById("careers-link");
  const contactLink = document.getElementById("contact-link");

  // Check the URL and set the active class accordingly
  if (currentURL === "/" || currentURL === "index.html") {
    homeLink.classList.add("active");
  } else if (currentURL.includes("about")) {
    aboutLink.classList.add("active");
  } else if (currentURL.includes("services")) {
    servicesLink.classList.add("active");
  } else if (currentURL.includes("blogs")) {
    blogsLink.classList.add("active");
  } else if (currentURL.includes("careers")) {
    careersLink.classList.add("active");
  } else if (currentURL.includes("contact")) {
    contactLink.classList.add("active");
  }
}

// Call the function to set the active link on page load
setActiveLink();




//Counter
const counters = document.querySelectorAll('.count');
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 200; // Adjust the speed of counting

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10); // Adjust the time interval
        } else {
            if (target >= 1000000) {
                counter.innerText = (target / 1000000).toFixed(1) + 'M+'; // Format for million
            } else {
                counter.innerText = target + '+'; // Append the plus sign for other numbers
            }
        }
    };

    updateCount();
});
