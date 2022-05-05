const scrollContainer = document.querySelector(".movie-view-thumbnail");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});


const scrollContainer2 = document.querySelector(".movie-view-thumbnail2");

scrollContainer2.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer2.scrollLeft += evt.deltaY;
});

const scrollContainer3 = document.querySelector(".movie-view-thumbnail3");

scrollContainer3.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer3.scrollLeft += evt.deltaY;
});