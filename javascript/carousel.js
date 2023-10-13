class Carousel {
    constructor(elementId) {
        this.carousel = document.getElementById(elementId);
        this.carouselSlide = this.carousel.querySelector(".carousel-slide");
        this.images = this.carouselSlide.querySelectorAll("img");
        this.prevButton = this.carousel.querySelector("#prevBtn");
        this.nextButton = this.carousel.querySelector("#nextBtn");

        this.currentIndex = 0;
        this.slideWidth = this.images[0].clientWidth;
        this.numImages = this.images.length;

        this.nextButton.addEventListener("click", this.next.bind(this));
        this.prevButton.addEventListener("click", this.prev.bind(this));
    }

    next() {
        this.currentIndex = (this.currentIndex + 1) % this.numImages;
        this.updateCarousel();
    }

    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.numImages) % this.numImages;
        this.updateCarousel();
    }

    updateCarousel() {
        const translateX = -this.currentIndex * this.slideWidth;
        this.carouselSlide.style.transform = `translateX(${translateX}px)`;
    }
}

const myCarousel = new Carousel("carouselSlide");
