const map = document.querySelector(".map");

// Get all elements in the map
const mapAreas = map.querySelectorAll("img");

mapAreas.forEach(mapArea => {
    mapArea.addEventListener("click", (event) => {
        
        mapAreas.forEach(mapArea => {
            mapArea.classList.remove("selected");
        });

        mapArea.classList.add("selected");
        
        let url = mapArea.src;

        // remove the .jpg from the url
        url = url.substring(0, url.length - 4); 

        // remove everything before the last /
        let area = url.substring(url.lastIndexOf("/") + 1);

        document.querySelector("#area").value = area;

        document.querySelector("#count").focus();
    });
});