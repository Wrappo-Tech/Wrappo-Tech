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
                counter.innerText = (target / 1000000) + 'M+'; // Format for million
            } else {
                counter.innerText = target + '+'; // Append the plus sign for other numbers
            }
        }
    };

    updateCount();
});