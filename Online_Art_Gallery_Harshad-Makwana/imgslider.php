<!-- img slider -->
    <div class="slider-container">
        <div class="slider">
            <img src="Image/1.jpg" alt="Image 1">
            <img src="Image/2.jpg" alt="Image 2">
            <img src="Image/3.jpg" alt="Image 3">
        </div>
        <button class="prev-button">Previous</button>
        <button class="next-button">Next</button>
    </div>
    
    <script>
        const slider = document.querySelector('.slider');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');
        let currentIndex = 0;

        nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slider.children.length;
        updateSlider();
        });

        prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
        updateSlider();
        });

        function updateSlider() {
        const translateX = -currentIndex * 100;
        slider.style.transform = `translateX(${translateX}%)`;
        }

    </script>