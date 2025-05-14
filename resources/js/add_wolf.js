const map = document.querySelector(".map");

// Get all provinves in the map
const mapAreas = map.querySelectorAll("path");

mapAreas.forEach(mapArea => {
    mapArea.addEventListener("click", (event) => {
        
        mapAreas.forEach(mapArea => {
            mapArea.classList.remove("selected");
        });
        mapArea.classList.add("selected");
        
        let area = mapArea.getAttribute("title")
        document.querySelector("#area").value = area;

        document.querySelector("#amount").focus();
    });
});