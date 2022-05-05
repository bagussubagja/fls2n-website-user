const scrollContainer = document.querySelector(".movie-view-thumbnail");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});