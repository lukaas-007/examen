const map = document.querySelector(".map");
const areaSelect = document.querySelector("#area");

// Get all provinves in the map
const mapAreas = map.querySelectorAll("path");

mapAreas.forEach(mapArea => {
    // We dont append it in the HTML.
    const option = document.createElement("option");
    option.value = mapArea.getAttribute("title");
    option.innerText = mapArea.getAttribute("title");
    areaSelect.appendChild(option);

    mapArea.addEventListener("click", (event) => {
        mapAreas.forEach(mapArea => {
            mapArea.classList.remove("selected");
        });
        mapArea.classList.add("selected");
        
        let area = mapArea.getAttribute("title")
        areaSelect.value = area;

        document.querySelector("#amount").focus();
    });
});

areaSelect.addEventListener("change", (event) => {
    mapAreas.forEach(mapArea => {
        mapArea.classList.remove("selected");
    });

    const selectedArea = map.querySelector(`path[title="${areaSelect.value}"]`);
    selectedArea.classList.add("selected");
});

// Insert the <text> per path
mapAreas.forEach((mapArea, index) => {
    let currentArea = mapArea.getAttribute("title");
    const bbox = mapArea.getBBox(); // assuming mapArea is an SVG path

    const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
    text.setAttribute("font-size", "20");
    text.setAttribute("fill", "#000");
    text.setAttribute("text-anchor", "middle"); // horizontal center
    text.setAttribute("dominant-baseline", "middle"); // vertical center

    text.setAttribute("x", bbox.x + bbox.width / 2);
    text.setAttribute("y", bbox.y + bbox.height / 2);

    let hasWolf = false;
    wolfPerArea.forEach((wolfCount, index) => {
        if (wolfCount.area === currentArea) {
            hasWolf = true;
            text.textContent = wolfCount.amount;
        }
    });

    if (!hasWolf) {
        text.textContent = "0";
    }

    map.querySelector('svg').appendChild(text);
});
