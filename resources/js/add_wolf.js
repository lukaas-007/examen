const map = document.querySelector(".map");

// Get all elements in the map
const mapAreas = map.querySelectorAll("img");

mapAreas.forEach(mapArea => {
    mapArea.addEventListener("click", (event) => {
        let url = mapArea.src;

        // remove the .jpg from the url
        url = url.substring(0, url.length - 4); 

        // remove everything before the last /
        let area = url.substring(url.lastIndexOf("/") + 1);

        alert(area);

        document.querySelector("#area").value = area;
    });
});